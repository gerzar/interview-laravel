<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ProductCategoryController as AdminProductCategoryController;
use \App\Http\Controllers\ProductController;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('products', AdminProductController::class);
    Route::resource('categories', AdminProductCategoryController::class);
});


Route::get('products', [ProductController::class, '__invoke'] );

Route::post('/add-to-cart/{product_id}', [\App\Http\Controllers\CartItemController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [\App\Http\Controllers\CartItemController::class, 'viewCartItems'])->name('cart');
Route::delete('/remove-from-cart/{cartItemID}', [\App\Http\Controllers\CartItemController::class, 'removeFromCart'])->name('removeFromCart');
