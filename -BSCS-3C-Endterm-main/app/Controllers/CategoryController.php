<?php

namespace App\Http\Controllers; // ✅ Remove "Auth" from namespace

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', ['categories' => []]);
    }
}
