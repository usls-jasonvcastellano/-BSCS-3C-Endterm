<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');
Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/create', 'App\Http\Controllers\InventoryController@create');
Route::get('/category', 'App\Http\Controllers\CategoryController@index');