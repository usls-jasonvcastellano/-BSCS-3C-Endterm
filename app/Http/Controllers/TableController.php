<?php

namespace App\Http\Controllers;

use App\Models\Category;

class TableController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('table.index', compact('categories'));
    }
}
