<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['name'=>$username, 'password'=>$password])){
            return view('success', ['user'=>Auth::user()]);
        }else{
            return view('login', ['error'=> 'Login not success']);
        }
    }
    
    public function logout(){
        Auth::logout();
        return view('login');
    }
}
