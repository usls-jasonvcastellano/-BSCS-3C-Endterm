<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddItemsController extends Controller
{
    public function index(){
        return view('add.create');
    }}
