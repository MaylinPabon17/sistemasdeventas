<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;

//categories
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])
    ->name('categories.edit');

Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');

//products
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])
    ->name('products.create');

Route::get('/products/edit/{product}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::post('/products/edit/{product}', [ProductController::class, 'update'])
    ->name('products.edit');

Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])
    ->name('products.delete');

//departments
Route::get('/departments', [DepartmentController::class, 'index'])
    ->name('departments.index');

Route::get('/departments/create', [DepartmentController::class, 'create'])
    ->name('departments.create');

Route::post('/departments/create', [DepartmentController::class, 'store'])
    ->name('departments.create');

Route::get('/departments/edit/{department}', [DepartmentController::class, 'edit'])
    ->name('departments.edit');

Route::post('/departments/edit/{department}', [DepartmentController::class, 'update'])
    ->name('departments.edit');

Route::post('/departments/delete/{department}', [DepartmentController::class, 'destroy'])
    ->name('departments.delete');

//cities
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');

Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');

Route::post('/cities/create', [CityController::class, 'store'])->name('cities.create');

Route::get('/cities/edit/{city}', [CityController::class, 'edit'])->name('cities.edit');

Route::post('/cities/edit/{city}', [CityController::class, 'update'])->name('cities.edit');

Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])->name('cities.delete');








Route::get('/', function () {
    return view('welcome');
});
