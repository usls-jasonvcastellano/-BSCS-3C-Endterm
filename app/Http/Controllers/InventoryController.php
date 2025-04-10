<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use View;
use App\Models\Items;

class InventoryController extends Controller
{
    public function index(){

        $items = Items::all();

        return view("inventory.index")->with([

            'items'=> $items

        ]);
    }


    public function create(){
            $categories = Category::all();

        return view('inventory.create',[

            'categories' => $categories,

        ]);

    }
    public function category(){

        return view("inventory.category");

    }

    public function edit($id){

        $items = Items::find($id);
        $categories_data = Category::all();

        $categories=[];

        foreach ($categories_data as $category){
            $categories[$category->]=$category->name;

        }

        return view('inventory.edit')->with([
                'items'=> $items,
                'categories'=> $categories


        ]);



    }


    public function update(Request $request, $id){

        $items = Items::find($id);
        $items->item_name = $request->input('itemname'),
        $items->price = $request->input('price'),


        $items->save();

        Items::where(['id'=.$id])->update([
            'itemname'=>$request->input('itemname')
            'price'=>$request->input('price')




        ]);




    }



}
