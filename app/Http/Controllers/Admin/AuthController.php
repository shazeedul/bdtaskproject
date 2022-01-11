<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return view('Admin/auth');
    }
    public function postLogin(Request $request){
        /*echo "<pre>";
        print_r($request);
        die();*/
        $validated = $request -> validate([
            'email' => 'requied|max:20|email:rfc,dns',
            'password' => 'required',
            'terms' => 'required|max:1'
        ]);
    }
}


