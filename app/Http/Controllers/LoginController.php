<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // Ensure there's a "login.blade.php" in resources/views
    }
}
