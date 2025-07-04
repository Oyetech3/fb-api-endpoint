<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/user', [ UserController::class, 'createUser' ]);
Route::post('/login', [ AuthController::class, 'login']);
Route::post('/logout', [ AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/me', [ AuthController::class, 'me'])->middleware('auth:sanctum');
Route::get('/test', function() {
    return response()->json([
        "message" => "Hello world"
    ]);
});
