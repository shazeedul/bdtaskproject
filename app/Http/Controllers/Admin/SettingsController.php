<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function appstg(){
        return view('Admin/app');
    }
    public function smsstg(){
        return view('Admin/sms');
    }
    public function emailstg(){
        return view('Admin/email');
    }
}
