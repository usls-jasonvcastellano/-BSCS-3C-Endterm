<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

Route::get('/Inventory', 'App\Http\Controllers\InventoryController@index');

Route::get('/register', 'App\Http\Controllers\RegisterController@index');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/create', 'App\Http\Controllers\CreateController@index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');