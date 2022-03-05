<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $data['banner'] = DB::table('banner_tb')
                                ->select('*')
                                ->first();
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        $data['product'] = DB::table('product_tb')
                                ->select('product_tb.*', 'category_tb.c_name')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->orderBy('product_tb.p_category','ASC')
                                ->get();
        $data['m_category'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->get();
        return view('ecommerce/home',$data);
    }
}