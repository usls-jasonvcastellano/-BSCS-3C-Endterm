<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', 'App\Http\Controllers\CategoryController@index');
