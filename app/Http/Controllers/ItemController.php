<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 

class ItemController extends Controller
{
    
    public function create()
    {
        return view('inventory.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Item::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect()->route('items.create')->with('success', 'Item added successfully!');
    }
}
