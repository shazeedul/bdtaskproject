<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        
        return view('Admin/addproduct');
    }
    public function addProduct(Request $request){
        
        
    }
    public function manageproduct(){
        
        return view('Admin/manageproduct');
    }
}
