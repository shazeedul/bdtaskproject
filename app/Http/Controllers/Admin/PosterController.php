<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosterController extends Controller
{
    public function index(){
        $data['editPoster'] = DB::table('poster_tb')
                                ->select('poster_image1','poster_image2')
                                ->first();
        return view('Admin/addposter',$data);
    }
    public function updatePoster(){
        $data['updatePoster'] = DB::table('poster_tb')
                                ->select('poster_image1','poster_image2')
                                ->first();
        return view('Admin/addposter',$data);
    }
}
