<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Category;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Items::all();

        return view('inv.inventory')->with([
            'items' => $items
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('inv.create', [
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $items = Items::find(   $id);
        $categories_data = Category::all();
    
        $categories = [];
        
        foreach ($categories_data as $category) {
            $categories[$category->id] = $category->name;
        }
    
        return view('inv.edit')->with([
            'items' => $items,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $items = Items::find($id);
        $items->item_name = $request->input('item_name');
        $items->price = $request->input('price');
        $items->category_id = $request->input('category_id');
        $items->save();

        // Items::where('id', $id)->update([
        //     'item_name' => $request->input('item_name'),
        //     'price' => $request->input('price'),
        //     'category_id' => $request->input('category_id')
        // ]);
    
        return redirect()->to('/inv');
    }
}