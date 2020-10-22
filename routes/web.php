<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'Shop\indexController@index');

//*****************************************/
//*****************************************/
//***************   shop   ****************/
//*****************************************/
//*****************************************/
Route::resource('/ShopBlog', 'Shop\BlogShopController');

Route::get('/ContactUs', 'Shop\indexController@ContactUs');

Route::get('/AboutUs', 'Shop\indexController@AboutUs');

Route::get('/ProductList', 'Shop\indexController@ProductList');

Route::get('/SingleProduct/{id}', 'Shop\indexController@SingleProduct');

Route::get('/CheckOut', 'Shop\indexController@CheckOut');

//*****************************************/
//*****************************************/
//***************   Auth   ****************/
//*****************************************/
//*****************************************/

Route::get('/SignIn', function () {
    return view('auth.login');
});

Route::get('/SignUp', function () {
    return view('auth.Register');
});

Route::get('/ResetPassword', function () {
    return view('auth.ResetPassword');
});

Route::get('/ForgotPassword', function () {
    return view('auth.forgotPassword');
});

//*****************************************/
//*****************************************/
//**********  Dashbord users **************/
//*****************************************/
//*****************************************/
Route::get('/panel', function () {
    return view('user.panel');
});

//*****************************************/
//*****************************************/
//*************  Dashbord  ****************/
//*****************************************/
//*****************************************/

Route::resource('/Admin/dashbord', 'Admin\AdminController');
Route::resource('/Admin/profile', 'Admin\ProfileController');

//**************** users *******************/

Route::resource('/Admin/Users', 'Admin\UserController');

//**************** blogs ******************/
Route::resource('/Admin/blogs', 'Admin\BlogController');

//************** categorys ****************/
Route::resource('/Admin/categorys', 'Admin\CategoryController');
//************** produc ****************/
Route::resource('/Admin/product', 'Admin\ProductController');

Route::get('/Admin/transaction/tables', function () {
    return view('admin.products.tran');
});

Route::get('/Admin/transaction/factor', function () {
    return view('admin.products.factor');
});
//************** sliders ******************/
Route::resource('/Admin/sliders', 'Admin\SliderController');
//************** profile ******************/
Route::get('/Admin/profile', function () {
    return view('admin.profile.index');
});
//************** Settings *****************/
Route::resource('/Admin/setting/aboutUs', 'Admin\ShopSettingController');

Route::get('/Admin/setting/support', function () {
    return view('admin.settings.support');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');