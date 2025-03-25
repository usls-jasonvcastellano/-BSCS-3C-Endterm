<?php

namespace App\Http\Controllers;

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

        return view("inventory.create");

    }
    public function category(){

        return view("inventory.category");

    }



}
