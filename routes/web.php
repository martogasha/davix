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


//Mpesa Routes
Route::get('lipa', 'CheckoutController@lipaNaMpesa');

//customer Routes
Route::get('/','ProductController@home');
Route::get('blog','ProductController@blog');
Route::get('blog/{id}/{name}','ProductController@blogDetail');
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
Route::get('office','CategoryController@office');
Route::get('toner','CategoryController@toner');
Route::get('projector','CategoryController@projector');
Route::get('ups','CategoryController@ups');
Route::get('printers','CategoryController@printers');
Route::get('cctv','CategoryController@cctv');
Route::get('laptops','CategoryController@laptops');
Route::get('storages','CategoryController@storage');
Route::get('software','CategoryController@software');
Route::get('gallery','GalleryController@gallery');

Route::resource('Login','LoginController');
Route::post('placeOrder','CheckoutController@placeOrder');
Route::post('LoginUser','LoginController@login')->name('loginCustomOne');
Route::post('RegisterUser','LoginController@register')->name('registerCustomOne');
Route::get('success','CheckoutController@success');
Route::resource('dashboard','DashController');
Route::post('search','ProductController@search');
Route::resource('trackOrder','TrackController');
Route::resource('internet','InternetController');
Route::get('cameraService','InternetController@cctv');
Route::get('maintenance','InternetController@maintenance');
Route::get('dataRecovery','InternetController@recovery');
Route::get('webDesign','InternetController@webDesign');
Route::get('NetworkingService','InternetController@networking');
Route::resource('about','AboutController');
Route::get('contactUs','AboutController@contact');





//admin Routes
Route::view('admin','admin.index');
Route::get('admin/order','OrderController@index');
Route::get('admin/blog','BlogController@index');
Route::get('edit/{id}','BlogController@edit');
Route::post('eBlog','BlogController@eBlog');
Route::post('storeBlog','BlogController@storeBlog');
Route::get('ajax','OrderController@getOrderDetails');
Route::get('adminGallery','GalleryController@adminGallery');
Route::post('deleteGalleryImage','GalleryController@deleteGalleryImage')->name('deleteGalleryImage');
Route::post('storeImage','GalleryController@storeImage')->name('storeImage');
Route::resource('stock','ProductController');
Route::get('deleteProduct/{id}','ProductController@deleteProduct');
Route::get('status/{id}','ProductController@status');
Route::get('editModal','GalleryController@editModal');
Route::post('editGalleryImage','GalleryController@editGalleryImage')->name('editGalleryImage');

Route::post('eProduct','ProductController@eProduct');
Route::get('editProductDetails/{id}','ProductController@editProductDetails');
Route::post('confirmOrder','OrderController@confirm');
Route::get('orderDetails','OrderController@orderDetails');
Route::resource('rating','RatingController');
Route::get('getRatings','RatingController@getRatings');
Route::get('admin/mpesaTransactions','MpesaController@mpesaTransactions');
Route::resource('advert','AdvertController');

Route::view('test','test');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
