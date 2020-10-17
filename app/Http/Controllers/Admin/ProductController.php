<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products= Product::all();
        $setting = $this->getDataShop();

        return view('admin.products.index',compact('products','setting'));

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

        return view('admin.products.add',compact('categorys','setting'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->uploadFile($request->file('image'),'product');

        $product = new Product();
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->count = $request->get('count');
        $product->price = $request->get('price');
        $product->categoryId = $request->get('categoryId');
        $product->image = $image;
        
        $product->save();
        return redirect()->route('product.index');
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
    public function edit(Product $product)
    {
        $categorys = Category::pluck('name', 'id');
        $setting = $this->getDataShop();
        return view('admin.products.edit',compact('product','categorys','setting'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $Product,Request $request)
    {
        
        $Product->title = $request->get('title');
        $Product->description = $request->get('description');
        $Product->count = $request->get('count');
        $Product->price = $request->get('price');
        $Product->categoryId = $request->get('categoryId');

        if($Product->image != $request->file('image')->getClientOriginalName()){
            $this->DeleteFile($Product->image,'product');
            $image = $this->uploadFile($request->file('image'),'product');
            $Product->image = $image;
        }

        $Product->update();
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
       $this->DeleteFile($Product->image,'product');
        $Product->delete();
        return redirect()->route('product.index');

    }
}