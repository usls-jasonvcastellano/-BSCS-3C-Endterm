<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; 


Route::get('/login', function () {
    return view('login');
});


Route::get('/inventory', function () {
    return view('inventory');
});


Route::get('/items/create', [ItemController::class, 'create'])->name('items.create'); // Show form
Route::post('/items', [ItemController::class, 'store'])->name('items.store'); // Handle form submission
