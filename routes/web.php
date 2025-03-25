<?php

use Illuminate\Support\Facades\Route;



Route::get('/login' , 'App\Http\Controllers\LoginController@Index');

Route::get('/hello' , 'App\Http\Controllers\LoginController@Index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');