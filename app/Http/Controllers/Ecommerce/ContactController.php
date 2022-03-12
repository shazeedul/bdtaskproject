<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
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
        return view('ecommerce/contact',$data);
    }
}