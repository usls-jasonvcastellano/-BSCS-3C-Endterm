<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/GuayJoelReyner', [FeatureController::class, 'index']);


Route::get(uri: '/profile', action: "App\Http\Controllers\ProfileController@index");

// Login Routes
Route::get( '/login', action: "App\Http\Controllers\LoginController@index");
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


// Inventory Routes
Route::get(uri: '/inventory', action: "App\Http\Controllers\InventoryController@index");
// Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

//Index route
Route::get(uri: '/index', action: "App\Http\Controllers\IndexController@index");


// Users Routes
Route::get('/users',[UsersController::class,'loadAllUsers'])->name('users');
Route::get('/add/user',[UsersController::class,'loadAddUserForm']);

Route::post('/add/user',[UsersController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UsersController::class,'loadEditForm']);
Route::get('/delete/{id}',[UsersController::class,'deleteUser']);

Route::post('/edit/user',[UsersController::class,'EditUser'])->name('EditUser');