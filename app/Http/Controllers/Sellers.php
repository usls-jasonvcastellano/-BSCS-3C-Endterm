<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class Sellers extends Controller
{
    public function index(){
        
        return view('auth.sellers');
    }

}

 

