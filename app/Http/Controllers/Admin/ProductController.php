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
            'p_name'            => 'required|max:255',
            's_description'     => 'required|max:3000',
            'l_description'     => 'required|max:5000',
            'quantity'          => 'required|max:500',
            'b_price'           => 'required|numeric',
            'mrp_price'         => 'required|numeric',
            's_price'           => 'required|numeric',
            'p_category'        => 'required|numeric',
            'image'             => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        $image_name = time().$request->file('image')->getClientOriginalName();
        
        $path = $request->file('image')->storeAs('public/p-image',$image_name);

        $data = array(
            'p_name'            => $request->input('p_name'),
            's_description'     => $request->input('s_description'),
            'l_description'     => $request->input('l_description'),
            'quantity'          => $request->input('quantity'),
            'b_price'           => $request->input('b_price'),
            'mrp_price'         => $request->input('mrp_price'),
            's_price'           => $request->input('s_price'),
            'p_category'        => $request->input('p_category'),
            'image'             => $image_name
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
                                ->select('product_tb.*', 'category_tb.c_name')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->orderBy('product_tb.p_category','ASC')
                                ->get();
                               

        return view('Admin/manageproduct', $data);
    }

    public function editproduct($id=null){
        $data['product'] = $product = DB::table('product_tb')
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
        return view('Admin/editproduct', $data);
    }


    public function updateProduct($id=null, Request $request){
        $validated = $request->validate([
            'p_name'            => 'required|max:250',
            's_description'     => 'required|max:300',
            'l_description'     => 'required|max:500',
            'quantity'          => 'required|max:500',
            'b_price'           => 'required|numeric',
            'mrp_price'         => 'required|numeric',
            's_price'           => 'required|numeric',
            'p_category'        => 'required|numeric',
            'image'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/p-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }
        
        $data = array(
            'p_name'            => $request->input('p_name'),
            's_description'     => $request->input('s_description'),
            'l_description'     => $request->input('l_description'),
            'quantity'          => $request->input('quantity'),
            'b_price'           => $request->input('b_price'),
            'mrp_price'         => $request->input('mrp_price'),
            's_price'           => $request->input('s_price'),
            'p_category'        => $request->input('p_category'),
            'image'             => $image_name
        );
        
        $update = DB::table('product_tb')->where('id', $id)->update($data);

        if($update){
            return redirect('editproduct/'.$id)->with('status', 'Update Successfully');
        }else{
            return redirect('editproduct/'.$id)->with('error', 'Something Went Wrong');
        }
    }

    public function deleteProduct($id){
        $delete = DB::table('product_tb')->where('id', $id)->delete($id);

        if($delete){
            return redirect('manageproduct')->with('status', 'Delete Successfully');
        }else{
            return redirect('manageproduct')->with('error', 'Something Went Wrong');
        }
    }
}
