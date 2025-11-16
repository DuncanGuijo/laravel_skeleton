<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetUserController;

// TEST
Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});


// USER
Route::middleware('auth:sanctum')->get('/users/{id}', GetUserController::class);