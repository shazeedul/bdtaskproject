<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    //
    public function aboutus(){
        return view('Admin/aboutus');
    }


    public function addbanner(){
        return view('Admin/aboutus');
    }
    public function addsitemap(){
        return view('Admin/aboutus');
    }
    public function addpolicy(){
        return view('Admin/aboutus');
    }
    public function adddeliveryinfo(){
        return view('Admin/aboutus');
    }
}
