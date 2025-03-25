<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;



class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('category')->get();
        return view('index', compact('items'));
    }
    public function create()
    {
        $categories = Category::all(); // Fetch categories for the dropdown
        return view('create', compact('categories'));
    }
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);
        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('items.index')->with('success', 'Item added successfully!');
}
}
