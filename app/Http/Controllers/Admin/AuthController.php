<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(){
        return view('Admin/auth');
    }
    public function postLogin(Request $request){
        // $validated = $request -> validate([
        //     'email' => 'required|max:20|email:rfc,dns',
        //     'password' => 'required',
        //     'terms' => 'required|max:1'
        // ]);
        $email = $request -> input('email');
        $password = $request -> input('password');
        $terms = $request -> input('terms');
        $users = DB::table('users')
                ->select('*')
                ->where('email', $email)
                ->where('status', 1)
                ->first();

                if($users){
                    if(Hash::check($password, $users->password)){
                        $request->session()->put('admin', $users);
                        print_r($request->session()->put('admin', $users));
                        return redirect('dashboard');

                        // echo "Password match";

                    }else{
                        echo "Wrong password";
                    }
                }else{
                    echo "Wrong Email";
                }



                

    }
}


