<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsController extends Controller
{
    //
    public function contactus(){
        return view('Admin/contactus');
    }


    public function addbanner(){
        $data['editBanner'] = DB::table('banner_tb')
                                ->select('*')
                                ->first();
        return view('Admin/addbanner',$data);
    }

    public function updateBanner(Request $request){
        $validated = $request->validate([
            'name'            => 'required|max:250',
            'description'     => 'required|max:300',
            'image'           => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/p-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }

        $data = array(
            'name'            => $request->input('name'),
            'description'     => $request->input('description'),
            'image'           => $image_name
        );

        $update = DB::table('banner_tb')->update($data);

        if($update){
            return redirect('/addbanner')->with('status', 'Update Successfully');
        }else{
            return redirect('/addbanner')->with('error', 'Something Went Wrong');
        }

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
