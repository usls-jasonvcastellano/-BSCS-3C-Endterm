<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login'); // 
})->name('login');

Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');

Route::get('/inventory/create', function () {
    return view('inventory.create'); 
})->name('inventory.create');