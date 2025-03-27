<?php

use Illuminate\Support\Facades\Route;


Route::get('/' ,'App\Http\Controllers\HelloController@index' );
Route::get('/create' ,'App\Http\Controllers\CreateController@index' );

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');

Route::get('/login' ,'App\Http\Controllers\LoginController@index' );
Route::post('/login' ,'App\Http\Controllers\LoginController@auth' );

Route::get('inventory','App\Http\Controllers\InventoryController@index');
