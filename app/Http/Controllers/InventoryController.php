<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Items::all();

        return view("inventory.index")->with([
            'items' => $items
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('inventory.create', [
            'categories' => $categories,
        ]);
    }

    public function category()
    {
        return view("inventory.category");
    }

    public function edit($id)
    {


        $item = Items::find($id);
        

        $categories_data = Category::all();

        $categories = [];
        foreach ($categories_data as $category) {
            $categories[$category->id] = $category->name;
        }

        return view('inventory.edit')->with([
            'item' => $item,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Items::find($id);
        
        $item->item_name = $request->input('itemname');
        $item->price = $request->input('price');
        $item->category_id = $request->input('category_id');
        $item->save();

        return redirect()->to('/inventory');
    }
}
