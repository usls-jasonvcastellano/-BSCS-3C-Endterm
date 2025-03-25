<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get( '/hello', 'App\Http\Controllers\HelloController@index');
Route::get( '/inventory', 'App\Http\Controllers\InventoryController@index');
Route::get( '/login', 'App\Http\Controllers\LoginController@index');
Route::get( '/table', 'App\Http\Controllers\TableController@index');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');