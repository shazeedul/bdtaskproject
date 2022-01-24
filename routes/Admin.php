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
Route::get('/addproduct', 'App\Http\Controllers\Admin\ProductController@addproduct')->name('addproduct');
Route::get('/manageproduct', 'App\Http\Controllers\Admin\ProductController@manageproduct')->name('manageproduct');
Route::get('/addcategory', 'App\Http\Controllers\Admin\CategoryController@addcategory')->name('addcategory');
Route::get('/managecategory', 'App\Http\Controllers\Admin\CategoryController@managecategory')->name('managecategory');
Route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');

