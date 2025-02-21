<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
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
Route::get('/admin/addProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/admin/addBrand', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brands', [BrandController::class, 'store'])->name('brand.store');
Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brand.show');
Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::patch('/brands/{brand}', [BrandController::class, 'update'])->name('brand.update');
Route::delete('/brands/{brand}', [BrandController::class, 'delete'])->name('brand.delete');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/addProduct', [AdminController::class, 'indexNewProduct'])->name('addProduct.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');