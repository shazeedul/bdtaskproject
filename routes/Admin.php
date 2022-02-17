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



Route::get('/neworder', 'App\Http\Controllers\Admin\OrderController@neworder')->name('neworder');
Route::get('/manageorder', 'App\Http\Controllers\Admin\OrderController@manageorder')->name('manageorder');
Route::get('/addorder', 'App\Http\Controllers\Admin\OrderController@addorder')->name('addorder');

Route::get('/invoice', 'App\Http\Controllers\Admin\OrderController@invoice')->name('invoice');

Route::get('/addproduct', 'App\Http\Controllers\Admin\ProductController@index')->name('addproduct');
Route::post('/addproduct', 'App\Http\Controllers\Admin\ProductController@addProduct')->name('addproduct');
Route::get('/manageproduct', 'App\Http\Controllers\Admin\ProductController@manageproduct')->name('manageproduct');
Route::get('/editproduct/{id}', 'App\Http\Controllers\Admin\ProductController@editproduct')->name('editproduct');
Route::put('/editproduct/{id}', 'App\Http\Controllers\Admin\ProductController@updateProduct')->name('editproduct');

Route::get('/addcategory', 'App\Http\Controllers\Admin\CategoryController@index')->name('addcategory');
Route::post('/addcategory', 'App\Http\Controllers\Admin\CategoryController@addCategory')->name('addcategory');
Route::get('/editcategory/{id}', 'App\Http\Controllers\Admin\CategoryController@editCategory')->name('editcategory');

Route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');

Route::get('/adminprofile', 'App\Http\Controllers\Admin\AuthController@adminProfile')->name('adminprofile');
Route::post('/adminprofile', 'App\Http\Controllers\Admin\AuthController@editProfile')->name('adminprofile');

Route::get('/users', 'App\Http\Controllers\Admin\UsersController@index')->name('users');


Route::get('/aboutus', 'App\Http\Controllers\Admin\CmsController@aboutus')->name('aboutus');
Route::get('/addbanner', 'App\Http\Controllers\Admin\CmsController@addbanner')->name('banner');
Route::get('/policy', 'App\Http\Controllers\Admin\CmsController@addpolicy')->name('privacypolicy');
Route::get('/sitemap', 'App\Http\Controllers\Admin\CmsController@addsitemap')->name('sitemap');
Route::get('/delivery_info', 'App\Http\Controllers\Admin\CmsController@adddeliveryinfo')->name('deliveryinfo');

