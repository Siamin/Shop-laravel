<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\SettingShop;


class ShopSettingController extends Controller
{

    public function __construct(){
        $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Setting = SettingShop::all();
        $setting = [];
        foreach($Setting as $st){
            $setting += [$st->key => $st->value];
        }
        $ST = $Setting[0];
        return view('admin.settings.aboutus',compact('setting','ST'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $Setting = SettingShop::all();

        foreach ($Setting as $st) {
            //dd($request->get($st->key));
            if($st->key != 'image'){
              $st->value = $request->get($st->key);
              $st->update();
            }else{
                if ($st->value != $request->file('image')->getClientOriginalName()) {
                    $this->DeleteFile($st->value, 'Shop');
                    $image = $this->uploadFile($request->file('image'), 'Shop');
                    $st->value = $image;
                    $st->update();

                }

            }
           
        }

        return redirect()->route('aboutUs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}