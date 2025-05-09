<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name', [NameController::class, 'index'])->name('name.index');
Route::post('/name', [NameController::class, 'store'])->name('name.store', 'color.store');
