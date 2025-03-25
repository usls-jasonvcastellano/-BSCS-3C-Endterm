<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index');

Route::get('/hello', 'App\Http\Controllers\HelloController@index');

Route::get('/create', 'App\Http\Controllers\CreateController@index');