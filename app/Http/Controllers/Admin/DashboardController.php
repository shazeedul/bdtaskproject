<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        $data['product'] = DB::table('product_tb')
                        ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                        ->select('product_tb.*', 'category_tb.id', 'category_tb.c_name')
                        ->orderBy('product_tb.p_category','ASC')
                        ->get();

        $check = Session::get('admin');
    
        if(!$check){

            return redirect('admin');

        }
        // print_r($check);

        return view('Admin/dashboard', $data);

        
    }
    public function logout(){
        Session::flush('admin');
        return redirect('admin');
    }
    
}
