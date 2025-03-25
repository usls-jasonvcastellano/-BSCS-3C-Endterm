<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Correct way to define a controller route
Route::get('/login', [LoginController::class, 'index']);
