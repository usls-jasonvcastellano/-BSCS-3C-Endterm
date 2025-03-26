<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;


class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all(); // 
        return view('feature',compact('features')); 
    }
}
