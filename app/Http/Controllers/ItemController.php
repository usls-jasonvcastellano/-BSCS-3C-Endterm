<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // List all items
    public function index()
    {
        // Eager-load category data if needed
        $items = Item::with('category')->get();
        return view('items.index', compact('items'));
    }

    // Show the edit form for a single item
    public function show($id)
    {
        $item = Item::findOrFail($id);
        // Retrieve all categories for the dropdown
        $categories = Category::all();
        return view('items.edit', compact('item', 'categories'));
    }

    // Update the item record in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name'   => 'required|string|max:255',
            'qty'         => 'required|integer|min:0',
            'price'       => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->only('item_name', 'qty', 'price', 'category_id'));

        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }
}
