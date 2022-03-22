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
        $data['appSettings'] = DB::table('appsetting_tb')
                                ->select('*')
                                ->first();
        
        $data['product'] = DB::table('product_tb')
                                ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                                ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                                ->get();
        $data['category'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->where('category', '=',0)
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

    public function addSubscribe(Request $request){
        $validated = $request->validate([
            'email'              => 'required|unique:subscriber_tb|max:30',
        ]);
        
        $data = array(
            'email'            => $request->input('email')

        );
       $insert = DB::table('subscriber_tb')->insert($data);
       if($insert){
            return redirect('/')->with('status', 'you subscribe here');
       }else{
            return redirect('/')->with('error', 'Something Went Wrong');
       }
    }
}