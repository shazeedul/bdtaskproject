<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppsettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['appSettings'] = DB::table('appsetting_tb')
                                ->select('*')
                                ->first();
        return view('Admin/app',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'max:25',
            'office_time'         => 'max:255',
            'address'       => 'max:255',
            'email'         => 'max:50',
            'phone'         => 'max:40',
            'fav_img'       => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'site_logo'      => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'admin_align'   => '',
            'office_time'   => 'max:255',
            'copyright_text'=> 'max:500',
        ]);

        if($request->file('fav_img')){
            $image_name = time().$request->file('fav_img')->getClientOriginalName();
            $path = $request->file('fav_img')->storeAs('public/app-image',$image_name);
            
            
        }else{
            $image_name = $request->input('old_image_one');
        }
        if($request->file('site_logo')){
            $image_name1 = time().$request->file('site_logo')->getClientOriginalName();
            $path = $request->file('site_logo')->storeAs('public/app-image',$image_name1);
        }else{
            $image_name1 = $request->input('old_image_two');
        }
            

            $data = array(
                'title'         => $request->input('title'),
                'address'       => $request->input('address'),
                'email'         => $request->input('email'),
                'phone'         => $request->input('phone'), 
                'fav_img'       => $image_name, 
                'site_logo'     => $image_name1,
                'admin_align'   => $request->input('admin_align'), 
                'office_time'   => $request->input('office_time'),
                'copyright_text'=> $request->input('copyright_text'),
            );

            $update = DB::table('appsetting_tb')->update($data);

            if($update){
                return redirect('app_settings')->with('status','successfully updated');
            }else{
                return redirect('app_settings')->with('error', 'something went wrong');
            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
