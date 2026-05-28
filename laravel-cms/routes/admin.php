<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\PostController;


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('posts', PostController::class);
});
