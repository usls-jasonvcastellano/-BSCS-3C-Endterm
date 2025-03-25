<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Items;


class InventoryController extends Controller
{
    public function index() {

        $items = Items::all();

        return view('inv.inventory')->with([

        'items' => $items

        ]);
    }

    //Error code: App\Http\Controllers\InventoryController::create(): Return value must be of type View, Illuminate\View\View returned
   // public function create(): view{
   //     return view('inv.create');
   // }
}
