<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product',   [HomeController::class, 'product'])->name('product');
Route::get('/product-details',   [HomeController::class, 'productDetails'])->name('product.details');
Route::get('/checkout',   [HomeController::class, 'checkout'])->name('product.checkout');
Route::get('/cart',   [HomeController::class, 'cart'])->name('product.cart');
Route::get('/login',   [HomeController::class, 'login'])->name('product.login');
