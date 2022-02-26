<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/shopgrid',$data);
    }
    public function shopDetails(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/shopdetails',$data);
    }
    public function shopingCart(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/shopingcart',$data);
    }
    
}