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
        $data['appSettings'] = DB::table('appsetting_tb')
                                ->select('*')
                                ->first();
        $data['department'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->get();
        $data['sociallink'] = DB::table('social_tb')
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
    public function productDetails($id=null){
        $data['productDetails'] = $product = DB::table('product_tb')
                                ->select('product_tb.*', 'category_tb.id as c_id', 'category_tb.c_name')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->where('product_tb.id', $id)
                                ->first();
        
        $data['category'] = DB::table('category_tb')
                                ->select('c_name', 'id')
                                ->where('category', '!=', 0)
                                ->where('status', 1)
                                ->where('id', '!=', $product->c_id)
                                ->get();
        return view('ecommerce/shopdetails', $data);
    }
    public function shopingCart(Request $request){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        $data['appSettings'] = DB::table('appsetting_tb')
                                ->select('*')
                                ->first();
        $data['department'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->get();
        $data['sociallink'] = DB::table('social_tb')
                                ->select('*')
                                ->first();
        $data['cart'] = $request->session()->get('cart');
        return view('ecommerce/shopingcart',$data);
    }
    
}