<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $data['showBanner'] = DB::table('banner_tb')
                                ->select('*')
                                ->get();
        return view('ecommerce/home',$data);
    }
}