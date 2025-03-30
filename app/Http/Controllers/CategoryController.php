<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Database\Seeders\CategoriesSeed;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('categories.index')->with([
                    'categories' => $categories
                   ]);
    }
    
    public function auth(Request $request):RedirectResponse{
        return redirect('/create');
    }

}

