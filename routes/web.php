<?php

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
Route::get('/api/orders',[\App\Http\Controllers\OrderController::class,"index"]);
Route::post('/api/reviews',[\App\Http\Controllers\ReviewController::class,"store"]);
Route::get('/api/review',[\App\Http\Controllers\ReviewController::class,"index"]);
Route::get('/api/products',[\App\Http\Controllers\ProductController::class,"index"]);
Route::get('/api/users',[\App\Http\Controllers\UsersController::class,"index"]);
Route::get('/api/OrderDetails',[\App\Http\Controllers\OrdersDetails::class,"index"]);
Route::get('/api/orders/delete',[\App\Http\Controllers\OrderController::class,"destroy"]);

