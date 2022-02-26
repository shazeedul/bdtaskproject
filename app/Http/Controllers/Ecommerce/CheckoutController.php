<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkOut(){
        $data['contact'] = DB::table('contact_tb')
                                ->select('*')
                                ->first();
        return view('ecommerce/checkout',$data);
    }
}