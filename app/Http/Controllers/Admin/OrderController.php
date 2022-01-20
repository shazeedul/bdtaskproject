<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        // echo "new order";
        // die();
        return view('Admin/neworder');
    }
}
