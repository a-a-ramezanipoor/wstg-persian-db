<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::resource('/items', ItemController::class)->except('index');

Route::get('categories/{category}/items', [CategoryController::class, 'items'])->name('categories.items');
