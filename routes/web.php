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

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/yourorder', [CartController::class, 'neworder'])->name('neworder');

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('cartremove', [CartController::class, 'removeCart'])->name('cart.remove');

Route::post('ordercreation', [CartController::class, 'create_order'])->name('ordercreation');

Route::get('/trackorder', [CartController::class, 'track'])->name('track');

Route::post('searchorder', [CartController::class, 'tracksearch'])->name('searchorder');

Route::get('order/{id}', [CartController::class, 'yourorder'])->name('yourorder');

