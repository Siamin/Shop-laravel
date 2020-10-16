<?php

namespace App\Http\Controllers\Shop;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menus = Category::with('getChild')->where('parentId', '0')->get();

        $products = [];
        foreach ($menus as $menu) {
            $parentCategory = Category::where('parentId', $menu->id)->pluck('id');

            if ($parentCategory->count() > 0) {
                $product = ['title' => $menu->name];
                $ParentCategory = [];

                foreach ($parentCategory as $pc) {
                    array_push($ParentCategory, $pc);
                }

                $pro = Product::latest()
                    ->whereIn('categoryId', $ParentCategory)->orderBy('id', 'DESC')
                    ->limit(10)->get();

                $product += ['pro' => $pro];

                array_push($products, ($product));
            }
        }

        $blogs = Blog::latest()->orderBy('id', 'DESC')->where('Status', 'active')->limit(3)->get();
        $sliders = Slider::latest()->orderBy('id', 'DESC')->where('status', 'active')->limit(3)->get();
        $DataShop = $this->getDataShop();

        return view('Home', compact('menus', 'sliders', 'products', 'blogs', 'DataShop'));
    }

    public function AboutUs()
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        $DataShop = $this->getDataShop();

        return view('shop.AboutUs', compact('menus', 'DataShop'));
    }

    public function ContactUs()
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        $DataShop = $this->getDataShop();

        return view('shop.ContactUs', compact('menus', 'DataShop'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function ProductList()
    {

        $products = Product::latest()->orderBy('id', 'DESC')->limit(5)->get();
        $DataShop = $this->getDataShop();
        $menus = Category::with('getChild')->where('parentId', '0')->get();

        return view('shop.ProductList', compact('menus', 'DataShop','products'));
    }

    public function SingleProduct($id)
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        $Product = Product::find($id)->get();
        $DataShop = $this->getDataShop();

        return view('shop.SingleProduct', compact('menus', 'Product', 'DataShop'));
    }

    public function CheckOut()
    {
        $menus = Category::with('getChild')->where('parentId', '0')->get();
        $DataShop = $this->getDataShop();

        return view('shop.CheckOut', compact('menus', 'DataShop'));

    }

}