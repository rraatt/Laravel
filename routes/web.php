<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/catalogue', [ProductController::class, 'cat'])->name('catalogue');

Route::get('/product/{id}', [ProductController::class, 'product_details'])->name('product_details');

Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');

Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('cart', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('clear', [CartController::class, 'clearCart'])->name('cart.clear');
