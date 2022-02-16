<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('ecommerce/blog');
    }

    public function blogDetails(){
        return view('ecommerce/blogdetails');
    }
}