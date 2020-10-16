<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blogs = Blog::all();
        $setting = $this->getDataShop();
        return view('admin.blogs.index', compact('Blogs','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::pluck('name', 'id');
        $setting = $this->getDataShop();
        return view('admin.blogs.add',compact('categorys','setting'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->uploadFile($request->file('Image'),'blog');
        $blog = new Blog();
        $blog->Title = $request->get('Title');
        $blog->Description = $request->get('Description');
        $blog->CategorId = $request->get('CategorId');
        $blog->Tags = $request->get('Tags');
        $blog->Status = $request->get('Status');
        $blog->Image = $image;
        $blog->save();

        return redirect()->route('blogs.index');

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
    public function edit(Blog $Blog)
    {
        $categorys = Category::pluck('name', 'id');
        $setting = $this->getDataShop();
        return view('admin.blogs.edit',compact('Blog','categorys','setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Blog $blog,Request $request)
    {

        $blog->Title = $request->get('Title');
        $blog->Description = $request->get('Description');
        $blog->CategorId = $request->get('CategorId');
        $blog->Tags = $request->get('Tags');
        $blog->Status = $request->get('Status');

        if($blog->Image != $request->file('Image')->getClientOriginalName()){
            $this->DeleteFile($blog->Image,'blog');
            $image = $this->uploadFile($request->file('Image'),'blog');
            $blog->Image=$image;
        }
        $blog->update();
        return redirect()->route('blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $Blog)
    {
       $this->DeleteFile($Blog->Image,'blog');
        $Blog->delete();
        return redirect()->route('blogs.index');

    }
}