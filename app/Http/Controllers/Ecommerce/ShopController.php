<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('ecommerce/shopgrid');
    }
    public function shopDetails(){
        return view('ecommerce/shopdetails');
    }
    public function shopingCart(){
        return view('ecommerce/shopingcart');
    }
    
}