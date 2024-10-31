<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/books', \App\Http\Controllers\BookController::class);
Route::resource('/journals', \App\Http\Controllers\JournalController::class);