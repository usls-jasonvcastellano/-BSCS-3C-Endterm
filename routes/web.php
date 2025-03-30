<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
Route::get('/create', 'App\Http\Controllers\CreateController@index');



Route::get('/sellers', 'App\Http\Controllers\Sellers@index');
Route::get('/index', 'App\Http\Controllers\CategoryController@index');

Route::post('/index', [CategoryController::class, 'auth'])->name('category.auth');
