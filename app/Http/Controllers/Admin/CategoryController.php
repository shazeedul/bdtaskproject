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
                            ->select('c_name','id','category','status')
                            ->where('status', 1)
                            ->get();
        
        return view('Admin/addcategory', $data);
    }
    public function addCategory(Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'status' => 'required|numeric',
        ]);

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
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
        ]);
        
        

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
        );
        


        $update = DB::table('category_tb')->where('id', $id)->update($data);

        if($update){
            return redirect('editcategory/'.$id)->with('status', 'Update Successfully');
        }else{
            return redirect('editcategory/'.$id)->with('error', 'Something Went Wrong');
        }



    }
}
