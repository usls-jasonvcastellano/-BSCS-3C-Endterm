<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryControllers extends Controller
{
    public function index(){
        return view('inventory.index');
    }
}