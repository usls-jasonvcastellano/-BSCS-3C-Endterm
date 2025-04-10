<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Items;
use App\Models\Category;
use PhpParser\Node\Stmt\Foreach_;

class InventoryController extends Controller
{
    public function index() {

        $items = Items::all();

        return view('inv.inventory')->with([

        'items' => $items

        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('inv.create', [
        'categories' => $categories,
        ]);
    }

    public function edit($id) {
        $items = items::find($id);
        $categories_data = Category::all();

        $categories = [];
        
        foreach ($categories_data as $categories) {
            $categories[$categories->id] = $categories->name;
        }

        return view (;)

    }

    public function update(Request $request, $id) {
        $items = Category::find($id);

        $items->Technology = $request->input('Technology'),
        $items->Health = $request->input('Health'),
        $items->Education = $request->input('Education'),

        $items->save();

        Category::where(['id' => $id])->update([
            'Technology' => $request->input('Technology'),
            'Health' => $request->input('Health'),
            'Education' => $request->input('Education'),
        ])
    }

}
