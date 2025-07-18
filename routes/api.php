<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CustomerViewController;

// Auth
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'me']);

// Produk
Route::middleware('auth:sanctum')->get('/products', [ProductController::class, 'index']);
Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);

// Transaksi
Route::middleware('auth:sanctum')->post('/transactions', [TransactionController::class, 'store']);

// Customer view
Route::get('/customer-view/{sessionId}', [CustomerViewController::class, 'show']);
