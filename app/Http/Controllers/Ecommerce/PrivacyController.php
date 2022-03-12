<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller
{
    //
    public function privacyPolicy(){
        $data['privacy'] = DB::table('privacy_tb')
                                ->select('*')
                                ->first();
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        $data['sociallink'] = DB::table('social_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/privacypolicy',$data);
    }
}
