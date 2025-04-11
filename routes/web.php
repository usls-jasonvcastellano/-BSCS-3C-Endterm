<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

// Hello Route
Route::get('/hello', [HelloController::class, 'index']);

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Item Routes
Route::resource('items', ItemController::class); // Automatically generates all CRUD routes for items
Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{id}/edit', [ItemController::class, 'show'])->name('items.edit');
Route::put('/items/{id}', [ItemController::class, 'update'])->name('items.update');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// Category Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/{id}/edit', [CategoryController::class, 'show'])->name('categories.edit'); // Edit form
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update'); // Update action