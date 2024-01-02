<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function from(){
        // dd('Login page');
        return view('Backend.login.form');
    }
    public function login(Request $request){
        // dd('Login page');
        
        // dd($request->all());
        $login = Auth()->guard('admin');
        // dd($login);

        $cranentials = $request->only('gmail','password');
        if($login->attempt($cranentials)){
            return redirect()->route('dashbord');
        }
        return redirect()->back();
        // dd($cranentials);
        // return view('Backend.login.form');
    }
}
