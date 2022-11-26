<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
    Route::get('index', [ProductController::class, 'index'])->name('product.index');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});
