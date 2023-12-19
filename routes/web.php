<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::patch('/products/{product}/sell', [ProductController::class, 'sell'])->name('products.sell');
Route::get('/products/{product}/edit-price', [ProductController::class, 'editPrice'])->name('products.edit-price');
Route::patch('/products/{product}/update-price', [ProductController::class, 'updatePrice'])->name('products.update-price');


Route::get('/dashboard/record', [DashboardController::class, 'index2'])->name('products.index2');
Route::get('/dashboard/sale-history', [DashboardController::class, 'saleHistory'])->name('products.sale-history');

