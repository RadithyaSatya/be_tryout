<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/auth/login",[AuthController::class,"login"]);
Route::middleware('auth:sanctum')->group(function () {
    Route::get("/auth/logout",[AuthController::class,"logout"]);
});
