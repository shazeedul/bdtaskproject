<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $data['category'] =  DB::table('category_tb')
                            ->select('c_name','id')
                            ->where('category', 0)
                            ->where('status',1)
                            ->get();
        
        $data['m_category'] = DB::table('category_tb')
                            ->select('c_name','id','category','status', 'image')
                            ->where('status', 1)
                            ->get();
        
        return view('Admin/addcategory', $data);
    }
    public function addCategory(Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'status' => 'required|numeric',
            'image'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $image_name = time().$request->file('image')->getClientOriginalName();
        
        $path = $request->file('image')->storeAs('public/c-image',$image_name);

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
            'image'  => $image_name
        );
        
        $insert = DB::table('category_tb') ->insert($data);

        if($insert){
            return redirect('addcategory')->with('status','Successfully added');
        }else{
            return redirect('addcategory')->with('status','Something wrong');
        }
    }

    public function editCategory($id=null){
        $data['e_category']  = DB::table('category_tb')
                            ->select('c_name','id','category','status')
                            ->where('status', 1)
                            ->where('category_tb.id', $id)
                            ->first();
        
        $data['m_category'] = DB::table('category_tb')
                            ->select('c_name','id','category','status')
                            ->where('status', 1)
                            ->get();
        return view('Admin/editcategory', $data);
    }

    public function updateCategory($id=null, Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'status' => 'required|numeric',
            'image'   => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/c-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }
        

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
            'image'             => $image_name
        );
        


        $update = DB::table('category_tb')->where('id', $id)->update($data);

        if($update){
            return redirect('editcategory/'.$id)->with('status', 'Update Successfully');
        }else{
            return redirect('editcategory/'.$id)->with('error', 'Something Went Wrong');
        }
    }

    public function deleteCategory($id){
        $delete = DB::table('category_tb')->where('id', $id)->delete($id);

        if($delete){
            return redirect('addcategory')->with('status', 'Delete Successfully');
        }else{
            return redirect('addcategory')->with('error', 'Something Went Wrong');
        }
    }
}
