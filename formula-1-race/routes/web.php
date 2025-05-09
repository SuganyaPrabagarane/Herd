<?php

use App\Http\Controllers\Formula1Controller;
use Illuminate\Support\Facades\Route;

/*
 * Route to display F1 2025 races
 */

Route::get('/', [Formula1Controller::class, 'index'])->name('races');
