<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\SimpleCalculatorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CalculatorController::class, 'index'])->name('calculator.index');

Route::post('/', [CalculatorController::class, 'calculate'])->name('calculator.calculate');

Route::get('/simplecalculator', [SimpleCalculatorController::class, 'index'])->name('simpleCalculator.index');

Route::post('/simplecalculator', [SimpleCalculatorController::class, 'simpleCalculate'])->name('simpleCalculator.simpleCalculate');
