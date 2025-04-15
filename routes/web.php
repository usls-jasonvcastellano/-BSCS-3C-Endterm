<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

// Home route
Route::get('/', function () {
    return view('home');
});

// Categories Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/edit', [CategoryController::class, 'show'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// Items Routes
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{id}/edit', [ItemController::class, 'show'])->name('items.edit');
Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');
