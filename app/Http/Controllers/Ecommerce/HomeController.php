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
                                ->select('product_tb.*', 'category_tb.c_name as c_name')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->get();
        $data['category'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->where('category', '!=',0)
                                ->get();
        $data['category1'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->where('category', 0)
                                ->get();
        $data['poster'] = DB::table('poster_tb')
                                ->select('*')
                                ->first();
        $data['department'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->get();
        $data['sociallink'] = DB::table('social_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/home',$data);
    }
}