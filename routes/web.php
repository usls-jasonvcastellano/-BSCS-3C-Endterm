<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inventory');
});

Route::get('/auth/login', 'App\Http\Controllers\AuthController@login');

Route::get('/products/view', 'App\Http\Controllers\ProductsController@viewProducts');