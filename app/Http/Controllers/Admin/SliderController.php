<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $setting = $this->getDataShop();

        return view('admin.sliders.index',compact('sliders','setting'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = $this->getDataShop();
        return view('admin.sliders.add',compact('setting'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->uploadFile($request->file('image'),'slider');

        $slider = new Slider();
        $slider->title = $request->get('title');
        $slider->description = $request->get('description');
        $slider->status = $request->get('status');
        $slider->image = $image;
        $slider->save();

        // session()->flash('success', 'slider created');
        return redirect()->route('sliders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $setting = $this->getDataShop();
        return view('admin.sliders.edit',compact('slider','setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        
        $slider->title = $request->get('title');
        $slider->description = $request->get('description');
        $slider->status = $request->get('status');

        if($slider->image != $request->file('image')->getClientOriginalName()){
            $this->DeleteFile($slider->image,'slider');
            $image = $this->uploadFile($request->file('image'),'slider');
            $slider->image=$image;
        }

        $slider->update();
        return redirect()->route('sliders.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->DeleteFile($slider->image,'slider');
        $slider->delete();
        return redirect()->route('sliders.index');

    }

}