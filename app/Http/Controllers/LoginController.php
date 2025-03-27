<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function login(Request $request)
    {
        
        $testUser = User::first(); // Get the first user in the database
        if (!$testUser) {
            $testUser = User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'), // Default password
            ]);
        }
    
        // Log in without checking credentials
        Auth::login($testUser);
    
        // Redirect to users page
        return redirect()->route('users'); 
    }
    

}

