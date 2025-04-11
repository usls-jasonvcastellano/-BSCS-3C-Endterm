<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('items.create', compact('categories')); // Return the create form view
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id); // Fetch the item by ID
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('items.edit', compact('item', 'categories')); // Return the edit form view
    }
    
    public function index()
    {
        $items = Item::all(); // Fetch all items from the database
        return view('items.index', compact('items')); // Return an index view with the items
    }


    // Show the edit form for a specific item
    public function show($id)
    {
        $item = Item::findOrFail($id); // Fetch the item by ID
        $categories = Category::all(); // Fetch all categories for the dropdown
        return view('items.edit', compact('item', 'categories')); // Return the edit form view
    }

    // Update the item record
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'item_name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Fetch the item and update its fields
        $item = Item::findOrFail($id);
        $item->update($request->only(['item_name', 'qty', 'price', 'category_id']));

        // Redirect to the items list with a success message
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'item_name' => 'required|string|max:255',
        'qty' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);

    // Create a new item
    Item::create($request->only(['item_name', 'qty', 'price', 'category_id']));

    // Redirect to the items list with a success message
    return redirect()->route('items.index')->with('success', 'Item created successfully.');
}

}