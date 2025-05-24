<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;


Route::get('/blade', [NameController::class, 'index'])->name('name.index');
Route::post('/store', [NameController::class, 'store'])->name('name.store');
Route::get('/edit/{id}', [NameController::class, 'edit'])->name('name.edit');
Route::patch('/update/{id}', [NameController::class, 'update'])->name('name.update');
Route::delete('/delete/{id}', [NameController::class, 'destroy'])->name('name.destroy');


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
