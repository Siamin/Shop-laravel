<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
        return view('home', compact('menus', 'sliders', 'products', 'blogs', 'DataShop'));
    }
}