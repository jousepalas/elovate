<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductTranslationController;

Route::apiResource('products', ProductController::class);
Route::get('/translate/{id}', [ProductTranslationController::class, 'translate']);

