<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $data['category'] =  DB::table('category_tb')
                            ->select('c_name','id')
                            ->where('category','!=',0)
                            ->where('status',1)
                            ->get();
        
        return view('Admin/addproduct', $data);
    }
    public function addProduct(Request $request){
        $validated = $request->validate([
            'p_name'            => 'required|max:50',
            's_description'     => 'required|max:150',
            'l_description'     => 'required|max:500',
            'quantity'          => 'required|max:500',
            'b_price'           => 'required|numeric',
            'mrp_price'         => 'required|numeric',
            's_price'           => 'required|numeric',
            'p_category'        => 'required|numeric',
            'image'             => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        $path = $request->file('image')->store('public/p-image');

        $data = array(
            'p_name'            => $request->input('p_name'),
            's_description'     => $request->input('s_description'),
            'l_description'     => $request->input('l_description'),
            'quantity'          => $request->input('quantity'),
            'b_price'           => $request->input('b_price'),
            'mrp_price'         => $request->input('mrp_price'),
            's_price'           => $request->input('s_price'),
            'p_category'        => $request->input('p_category'),
            'image'             => $path
        );

        $insert = DB::table('product_tb')->insert($data);

        if($insert){
            return redirect('addproduct')->with('status', 'Successfully Added');
        }else{
            return redirect('addproduct')->with('error', 'Something Went Wrong');
        }



    }
    public function manageproduct(){
        
        $data['product'] = DB::table('product_tb')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->select('product_tb.*', 'category_tb.c_name')
                                ->orderBy('product_tb.p_category','ASC')
                                ->get();
                               

        return view('Admin/manageproduct', $data);
    }
}
