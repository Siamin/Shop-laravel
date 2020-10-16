<?php

namespace App\Http\Controllers\Shop;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;

class BlogShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        
        $blogs = Blog::latest()->orderBy('id', 'DESC')->limit(5)->get();
        $DataShop = $this->getDataShop();

        return view('shop.blogs', compact('menus', 'blogs', 'DataShop', 'blogCount'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        $blog = Blog::where('id', $id)->get();
        $DataShop = $this->getDataShop();

        return view('shop.blog', compact('menus', 'blog', 'DataShop'));

    }

}