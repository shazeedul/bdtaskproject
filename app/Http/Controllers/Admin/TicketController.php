<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    //
    public function index(){
        return view('Admin/ticket');
    }

    
    public function subscriber(){
        $data['subscriber'] = DB::table('subscriber_tb')
                                ->select('*')
                                ->get();
        return view('Admin/subscriber',$data);
    }
}
