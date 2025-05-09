<?php

use App\Http\Controllers\HelloController; // importing
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{name?}', [HelloController::class, 'hello']);

Route::get('/', function () {
    return view('welcome', [
        'greeting' => "Hello",
        'name' => "Suganya"
    ]);
});
