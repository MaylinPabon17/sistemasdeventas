<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::get('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::get('/categories/edit/{category]', [CategoryController::class, 'update'])
    ->name('categories.edit');

Route::get('/categories/delete/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');


Route::get('/products', [\App\Models\ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [\App\Models\ProductController::class, 'create'])
    ->name('products.create');

Route::get('/products', [\App\Models\ProductController::class, 'store'])
    ->name('products.create');

Route::get('/products/edit/{product}', [\App\Models\ProductController::class, 'edit'])
    ->name('products.edit');

Route::get('/products/edit/{product}', [\App\Models\ProductController::class, 'update'])
    ->name('products.edit');

Route::get('/products/delete/{product}', [\App\Models\ProductController::class, 'destroy'])
    ->name('products.delete');








Route::get('/', function () {
    return view('welcome');
});
