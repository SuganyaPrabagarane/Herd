<?php

use App\Http\Controllers\OpenWeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OpenWeatherController::class, 'index'])->name('weather');
