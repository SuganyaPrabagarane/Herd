<?php

use App\Http\Controllers\ConvertController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConvertController::class, 'index'])->name('converter.index');
Route::post('/', [ConvertController::class, 'convert'])->name('converter.convert');
