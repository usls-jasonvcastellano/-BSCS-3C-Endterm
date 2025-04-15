<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        
        $categories = Category::all();

        return view("categories.index")->with([

            'categories'=> $categories

        ]);

        

    }

    public function create(){

        return view('categories.create');


    }

    public function edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->withErrors(['Category not found']);
        }

        return view('categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->withErrors(['Category not found']);
        }

        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category->update($validated);

        return redirect()->route('category.index');
    }

  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        \App\Models\Category::create($validated);
        
    
        return redirect('/category');
    }
    

}


