<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        return view('guardian.index');
    }

    public function create()
    {
        return view('guardian.create');
    }
}
