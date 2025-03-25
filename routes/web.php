<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: '/login', action: 'App\Http\Controllers\LoginController@index');

Route::get(uri: '/hello', action: 'App\Http\Controllers\HelloController@index');

Route::get(uri: '/create', action: 'App\Http\Controllers\CreateController@index');

Route::get(uri: '/categories', action: 'App\Http\Controllers\CategoryController@index');

