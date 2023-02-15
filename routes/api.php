<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_products', [ProductController::class, 'index']);
Route::post('/add_product', [ProductController::class, 'store']);
Route::delete('/delete_product/{id}', [ProductController::class, 'destroy']);
// Route::resource('products','App\Http\Controllers\ProductController');

Route::get('/get_categories', [CategoryController::class, 'index']);
Route::post('/add_category', [CategoryController::class, 'store']);
Route::delete('/delete_category/{id}', [CategoryController::class, 'destroy']);

Route::get('/get_users', [UserController::class, 'index']);
Route::post('/add_user', [UserController::class, 'store']);
Route::delete('/delete_user/{id}', [UserController::class, 'destroy']);

// // Route::get('/get_images', [ImageController::class, 'index']);
// // Route::post('/add_image', [ImageController::class, 'store']);
// // Route::delete('/delete_image/{id}', [ImageController::class, 'destroy']);
// Route::resource('images','App\Http\Controllers\ImageController');
