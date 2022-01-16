<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    //
    public function index(){
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
        $users = DB::table('users')
                ->select('*')
                ->where('email', $email)
                ->where('status', 1)
                ->first();

                if($users){
                    if(Hash::check($password, $users->password)){
                        $data = array(
                            'email' => $email,
                            'f_name' => $users->f_name,
                            'l_name' => $users->l_name,
                            'is_login' => 1,
                            'is_admin' => 1
                        );

                        $request->session()->put('admin', (object)$data);
                        // echo "<pre>";
                        
                        // print_r($request->session()->get('admin'));
                        // die();
                        return redirect('dashboard');

                        // echo "Password match";

                    }else{
                        return Redirect::back()->withErrors(['error' => 'Wrong Password']);
                    }
                    
                }else{
                    return Redirect::back()->withErrors(['error' => 'Wrong Email']);
                }
                



                

    }
}


