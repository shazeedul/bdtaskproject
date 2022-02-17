<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    //
    public function contactus(){
        return view('Admin/contactus');
    }


    public function addbanner(){
        return view('Admin/addbanner');
    }
    public function addsitemap(){
        return view('Admin/oursitemap');
    }
    public function addpolicy(){
        return view('Admin/privacypolicy');
    }
    public function adddeliveryinfo(){
        return view('Admin/deliveryinfo');
    }
}
