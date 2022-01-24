<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addproduct(){
        
        return view('Admin/addproduct');
    }
    public function manageproduct(){
        
        return view('Admin/manageproduct');
    }
}
