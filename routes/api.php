<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::middleware('api')->group(function () {
    Route::apiResource('products', ProductController::class);
});
