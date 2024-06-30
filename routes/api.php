<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


Route::post('/categories', [ImageController::class, 'storeCategory']);
Route::post('/categories/{categoryId}/images', [ImageController::class, 'storeImage']);
Route::get('/categories', [ImageController::class, 'getCategories']);
