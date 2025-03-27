<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Login;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorld;
use App\Http\Controllers\Create;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', [HelloWorld::class, 'index']);
Route::get('/create', [Create::class, 'create']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/Inventory', [InventoryController::class, 'Inv']);
Route::get('/main', [MainController::class, 'mainlmao']);
Route::get('/categories',[CategoryController::class,'index']);

