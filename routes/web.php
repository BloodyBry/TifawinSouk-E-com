<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::redirect('/', '/admin/categories');

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});
