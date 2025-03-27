<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', 'App\Http\Controllers\LoginControllers@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginControllers@authenticate');

Route::get('/inventory', 'App\Http\Controllers\InventoryControllers@index')->name('inventory');

Route::get('/additems', 'App\Http\Controllers\AddItemsController@index')->name('additems');
