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




route::get('/','App\Http\Controllers\Ecommerce\HomeController@home')->name('home');

route::get('/blog','App\Http\Controllers\Ecommerce\BlogController@blog')->name('blog');

route::get('/blogdetails','App\Http\Controllers\Ecommerce\BlogController@blogDetails')->name('blogdetails');

route::get('/checkout','App\Http\Controllers\Ecommerce\CheckoutController@checkOut')->name('checkout');

route::get('/contact','App\Http\Controllers\Ecommerce\ContactController@contact')->name('contact');

route::get('/shop','App\Http\Controllers\Ecommerce\ShopController@shop')->name('shop');

route::get('/shopdetails','App\Http\Controllers\Ecommerce\ShopController@shopDetails')->name('shopdetails');
route::get('/shopdetails/{id}','App\Http\Controllers\Ecommerce\ShopController@productDetails')->name('shopdetails');

route::get('/shoppingcart','App\Http\Controllers\Ecommerce\ShopController@shopingCart')->name('shoppingcart');

route::get('/privacypolicy','App\Http\Controllers\Ecommerce\PrivacyController@privacyPolicy')->name('privacypolicy');

route::get('/addcart/{id}','App\Http\Controllers\Ecommerce\CartController@privacyPolicy')->name('addCart');