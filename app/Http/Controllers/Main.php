<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class Main extends Controller
{
    public function index()
    {
        $midterm = Test::all(); 
        return view('practice.test', [
            'test' => $midterm,
        ]);
    }
}
