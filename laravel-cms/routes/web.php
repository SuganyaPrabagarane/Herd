<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\PostController;

// ✅ Manual auth routes for Laravel 12+
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Public routes
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

// Admin routes
require __DIR__ . '/admin.php';
