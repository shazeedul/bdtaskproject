<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function addcategory(){
        
        return view('Admin/addcategory');
    }
    public function managecategory(){
        
        return view('Admin/managecategory');
    }
}
