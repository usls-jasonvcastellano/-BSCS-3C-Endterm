<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
            return view('auth.login');

    }

    public function auth(Request $request){
        
        //$request->validate([
        //    'email'=>'required',
        //    'password'=>'required'
        //]);
        
        return redirect("/inventory");

    }
}
