<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/somepath', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/addProduct', [AdminController::class, 'indexNewProduct'])->name('addProduct.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');