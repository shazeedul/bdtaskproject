<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    //
    public function privacyPolicy(){
        return view('Ecommerce/privacypolicy');
    }
}
