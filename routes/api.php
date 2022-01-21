<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\StoreFrontController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/** Authentication Routes */

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [StoreFrontController::class, 'index']);
Route::apiResource('product-category', ProductCategoryController::class);
