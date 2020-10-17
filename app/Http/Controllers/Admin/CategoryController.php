<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
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
        $category = Category::all();
         $setting = $this->getDataShop();
        return view('admin.categorys.index', compact('category','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('parentId', '0')->pluck('name', 'id');
       $setting = $this->getDataShop();
        return view('admin.categorys.add', compact('category','setting'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->uploadFile($request->file('image'),'category');

        $category = new Category();
        $category->name=$request->get('name');
        $category->parentId=$request->get('parentId');
        $category->image=$image;
        $category->save();
        return redirect()->route('categorys.index');
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
    public function edit(Category $category)
    {
        $categorys = Category::where('parentId', '0')->pluck('name', 'id');
        $setting = $this->getDataShop();
        return view('admin.categorys.edit', compact('category', 'categorys','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category, Request $request)
    {
        $category->name=$request->get('name');
        $category->parentId=$request->get('parentId');
           
        if($category->image != $request->file('image')->getClientOriginalName()){
            $this->DeleteFile($category->image,'category');
            $image = $this->uploadFile($request->file('image'),'category');
            $category->image=$image;
        }
        
        $category->update();
        return redirect()->route('categorys.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->DeleteFile($category->image,'category');
        Category::where('parentId', $category->id)->delete();
        $category->delete();
        return redirect()->route('categorys.index');

    }

   

}