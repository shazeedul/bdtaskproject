<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        $data['department'] = DB::table('category_tb')
                                ->select('*')
                                ->where('status', 1)
                                ->get();
        $data['sociallink'] = DB::table('social_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/blog',$data);
    }

    public function blogDetails(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/blogdetails',$data);
    }
}