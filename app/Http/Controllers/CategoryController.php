<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();  // Fetch categories from DB
        return view('categories.index', compact('categories'));
    }
}
