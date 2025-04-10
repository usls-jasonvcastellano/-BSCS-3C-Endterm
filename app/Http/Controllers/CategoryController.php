<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::all();

        return view('categories.index')->with([

        'categories' => $categories

        ]);

        return view('categories.index');
    }

    public function create()
    {
        return view('inv.create');
    }


}

