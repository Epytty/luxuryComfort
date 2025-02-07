<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/somepath', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');