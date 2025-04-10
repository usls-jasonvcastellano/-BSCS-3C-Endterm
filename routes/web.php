<?php

use Illuminate\Support\Facades\Route;


Route::get('/category', 'App\Http\Controllers\CategoryController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@index');
Route::get('/student/create', 'App\Http\Controllers\StudentController@create');
Route::get('/student/{id}', 'App\Http\Controllers\StudentController@edit');
Route::put('/student/{id}', 'App\Http\Controllers\StudentController@update');







Route::get('/guardian', 'App\Http\Controllers\GuardianController@index');
Route::get('/guardian/create', 'App\Http\Controllers\GuardianController@create');
Route::post('/guardian/store', 'App\Http\Controllers\GuardianController@store');
