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
    public function manageCategory(){
        //
    }
}
