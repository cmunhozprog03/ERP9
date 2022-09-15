<?php

use App\Http\Controllers\Admin\{
    CategoryController,
    DashboardController,
    SubcategoryController
};
use Illuminate\Support\Facades\Route;


Route::get('', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('categorias', CategoryController::class)->names('admin.categories');
Route::resource('subcategorias', SubcategoryController::class)->names('admin.subcategories');