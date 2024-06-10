<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index.index');
Route::get('/show', [IndexController::class, 'show'])->name('index.show');

Route::resource('listing', ListingController::class);