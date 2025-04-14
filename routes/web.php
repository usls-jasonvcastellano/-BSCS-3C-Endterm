<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/login','App\Http\Controllers\LoginController@auth');
Route::get('/inventory','App\Http\Controllers\InventoryController@index');
Route::get('/hello','App\Http\Controllers\HelloController@index');
Route::get('/inventory/create','App\Http\Controllers\InventoryController@create');
Route::get('/inventory/{id}/edit','App\Http\Controllers\InventoryController@edit');
Route::put('/inventory/{id}','App\Http\Controllers\InventoryController@update');

Route::get('/category','App\Http\Controllers\CategoryController@index');
Route::get('/category/create','App\Http\Controllers\CategoryController@create');