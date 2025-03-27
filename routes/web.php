<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', "App\Http\Controllers\LoginController@auth");

Route::get('/welcome', "App\Http\Controllers\Welcome@index");
Route::get('/inventory', "App\Http\Controllers\inventory@index");
Route::get('/hello', "App\Http\Controllers\HelloController@index");

