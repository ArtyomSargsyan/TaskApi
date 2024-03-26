<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\PhoneBookController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

// Route::get('posts', [ContactController::class, 'getAllPost']);
//Route::resource('phone-book', PhoneBookController::class);
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

Route::apiResource('phone-book', PhoneBookController::class)->middleware('auth:sanctum');