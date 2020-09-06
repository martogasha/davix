<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return view('welcome');
});
//Mpesa Routes
Route::get('lipa', 'CheckoutController@lipaNaMpesa');

//customer Routes
Route::get('/','ProductController@home');
Route::resource('productDetail','ProductDetailController');
Route::resource('cart','CartController');
Route::post('cartOne','CartController@cartOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('addByOne/{id}','CartController@addByOne');
Route::get('cartReduceByOne/{id}','CartController@getReduceByOne');
Route::get('cartRemove/{id}','CartController@removeItem');
Route::resource('checkout','CheckoutController');
Route::get('shop','CategoryController@all');
Route::get('computers','CategoryController@computers');
Route::get('electronics','CategoryController@electronics');
Route::get('networking','CategoryController@networking');
Route::get('consumer','CategoryController@consumer');
Route::get('phones','CategoryController@phones');
Route::get('printers','CategoryController@printers');
Route::get('cctv','CategoryController@cctv');
Route::get('laptops','CategoryController@laptops');
Route::get('storage','CategoryController@storage');
Route::get('software','CategoryController@software');

Route::resource('Login','LoginController');
Route::post('placeOrder','CheckoutController@placeOrder');
Route::post('LoginUser','LoginController@login')->name('loginCustomOne');
Route::post('RegisterUser','LoginController@register')->name('registerCustomOne');
Route::get('success','CheckoutController@success');
Route::resource('dashboard','DashController');
Route::post('search','ProductController@search');
Route::resource('trackOrder','TrackController');




//admin Routes
Route::view('admin','admin.index');
Route::get('admin/order','OrderController@index');
Route::get('ajax','OrderController@getOrderDetails');
Route::resource('stock','ProductController');
Route::get('deleteProduct/{id}','ProductController@deleteProduct');
Route::post('eProduct','ProductController@eProduct');
Route::get('editProductDetails/{id}','ProductController@editProductDetails');
Route::post('confirmOrder','OrderController@confirm');
Route::get('orderDetails','OrderController@orderDetails');
Route::resource('rating','RatingController');
Route::get('getRatings','RatingController@getRatings');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
