<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index(){
        
        $check = Session::get('admin');
        if($check){

            return redirect('dashboard');

        }
        return view('Admin/auth');
    }
    public function postLogin(Request $request){
        $validated = $request ->validate([
            'email' => 'required|max:50|email:rfc,dns',
            'password' => 'required',
            'terms' => 'required|max:1'
        ]);
        $email = $request -> input('email');
        $password = $request -> input('password');
        $admin = DB::table('admin')
                ->select('*')
                ->where('email', $email)
                ->where('status', 1)
                ->first();

                if($admin){
                    if(Hash::check($password, $admin->password)){
                        $data = array(
                            'email' => $email,
                            'f_name' => $admin->f_name,
                            'l_name' => $admin->l_name,
                            'is_login' => 1,
                            'is_admin' => 1
                        );

                        $request->session()->put('admin', (object)$data);
                        // echo "<pre>";
                        
                        // print_r($request->session()->get('admin'));
                        // die();
                        
                        return redirect('dashboard')->with('status', 'Welcome Back- '.$admin->f_name." ".$admin->l_name);

                        // return redirect('dashboard');

                        // echo "Password match";

                    }else{
                        return Redirect::back()->withErrors(['error' => 'Wrong Password']);
                    }
                    
                }else{
                    return Redirect::back()->withErrors(['error' => 'Wrong Email']);
                }
    }

    public function adminProfile(){
        //
        return view('Admin/adminprofile');
    }
    public function editPrfile(){
        //
        return view('Admin/adminprofile');
    }
}


