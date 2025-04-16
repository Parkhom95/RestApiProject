<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->prefix('products')
    ->group(function () {
        Route::get('', 'index')
            ->name('products.index');
        Route::get('{product}', 'show')
            ->name('products.show');
        Route::post('', 'store')
            ->name('products.store');
        Route::post('{product}/review', 'review')
            ->name('products.review.store');
    });
