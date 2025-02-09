<?php

use App\Http\Controllers\PassportAuthController;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get(
    '/user', function (Request $request) {
    return $request->user();
}
);

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::post('logout', [PassportAuthController::class, 'logout']);


