<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosterController extends Controller
{
    public function index(){
        $data['poster'] = DB::table('poster_tb')
                                ->select('poster_image1','poster_image2')
                                ->first();
        return view('Admin/addposter',$data);
    }
    public function addPoster(Request $request){
        $validated = $request->validate([
            'poster_image1'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'poster_image2'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $image_name1 = time().$request->file('poster_image1')->getClientOriginalName();
        $image_name2 = time().$request->file('poster_image2')->getClientOriginalName();
        
        $path1 = $request->file('poster_image1')->storeAs('public/poster-image',$image_name1);
        $path2 = $request->file('poster_image2')->storeAs('public/poster-image',$image_name2);

        $data = array(
            'poster_image1'  => $image_name1,
            'poster_image2'  => $image_name2,
        );
        
        $insert = DB::table('poster_tb') ->insert($data);

        if($insert){
            return redirect('addposter')->with('status','Successfully added');
        }else{
            return redirect('addposter')->with('status','Something wrong');
        }
    }
    public function updatePoster(Request $request){
        $validated = $request->validate([
            'poster_image1'           => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'poster_image2'           => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if($request->file('poster_image1')){
            $image_name1 = time().$request->file('poster_image1')->getClientOriginalName();
            $image_name2 = time().$request->file('poster_image2')->getClientOriginalName();
            $path = $request->file('poster_image1')->storeAs('public/poster-image',$image_name1);
            $path = $request->file('poster_image2')->storeAs('public/poster-image',$image_name2);
        }else{
            $image_name = $request->input('old_image');
        }

        $data = array(
            'poster_image1'           => $image_name1,
            'poster_image2'           => $image_name2
        );

        $update = DB::table('poster_tb')->update($data);

        if($update){
            return redirect('/addposter')->with('status', 'Update Successfully');
        }else{
            return redirect('/addposter')->with('error', 'Something Went Wrong');
        }
    }
}
