<?php

use App\Http\Controllers\Api\NameColorController;
use App\Http\Controllers\Api\WordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\HTTP;

Route::apiResource('name-colors', NameColorController::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('words', WordController::class);


Route::get('/proxy/finnish-words', function (Request $request) {
    $response = Http::withHeaders([
        'x-api-key' => '9dd038947f7d41a7bd55c7f73766f815'
    ])->get('https://finnfast.fi/api/words', [
        'limit' => 10,
        'page' => 1,
        'all' => false
    ]);

    return response()->json($response->json());
});

Route::post('/words', [WordController::class, 'store']);
