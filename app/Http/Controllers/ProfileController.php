<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = profile::paginate(10);
        return view('auth.profile', compact('profiles'));
    }
}
