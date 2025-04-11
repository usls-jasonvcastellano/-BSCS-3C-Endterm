<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
    ]);

    // Create the category
    Category::create($request->only(['name', 'description']));

    // Redirect to the categories list with a success message
    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
}

    public function create()
{
    return view('categories.create'); // Return a view to create a new category
}


    public function index()
{
    $categories = Category::all(); // Fetch all categories
    return view('categories.index', compact('categories')); // Return the index view
}


    // Show the edit form for a specific category
    public function show($id)
    {
        $category = Category::findOrFail($id); // Fetch the category by ID
        return view('categories.edit', compact('category')); // Return the edit form view
    }

    // Update the category record
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Fetch the category and update its fields
        $category = Category::findOrFail($id);
        $category->update($request->only(['name', 'description']));

        // Redirect to the categories list with a success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
}