<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Use the correct model
use App\Models\Category; // If you need category names

class InventoryController extends Controller
{
    // Display the inventory list
    public function index()
    {
        // Fetch all items with their category
        $inventoryItems = Item::with('category')->get();

        // Pass data to the view
        return view('inventory.index', compact('inventoryItems'));
    }

    // Show the create form
    public function create()
    {
        // Fetch all categories for the dropdown
        $categories = Category::all();
        return view('inventory.create', compact('categories'));
    }

    // Handle form submission and store data
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id', // Ensure category exists
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        // Create a new item
        Item::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('inventory.index')->with('success', 'Item added successfully!');
    }
}
