<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: '/login', action: 'App\Http\Controllers\LoginControllers@index');
Route::get(uri: '/hello', action: 'App\Http\Controllers\HelloController@index');
Route::get(uri: '/inventory', action: 'App\Http\Controllers\InventoryController@index');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');