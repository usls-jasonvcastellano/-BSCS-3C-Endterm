<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

// Inventory Routes
Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
Route::get('/inv', 'App\Http\Controllers\InventoryController@index'); // Alias for /inventory
Route::get('/inv/create', 'App\Http\Controllers\InventoryController@create');
Route::get('/inv/{id}/edit', 'App\Http\Controllers\InventoryController@edit');
Route::put('/inv/{id}', 'App\Http\Controllers\InventoryController@update');

// Category Routes
Route::get('/category', 'App\Http\Controllers\CategoryController@index');

// Hello Route (example/test)
Route::get('/hello', 'App\Http\Controllers\HelloController@index');