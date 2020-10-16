<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $setting = $this->getDataShop();
        return view('admin.dashbord',compact('setting'));
    }
}