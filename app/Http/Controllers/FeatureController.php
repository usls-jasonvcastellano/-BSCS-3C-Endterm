<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all(); // Fetch all features from the database
        return view('features.index', compact('features')); // Pass data to the view
    }
}
