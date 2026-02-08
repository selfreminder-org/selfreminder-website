<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'users')->name('api.users');
    Route::post('/users/get-or-create', 'getOrCreate')->name('api.users.get-or-create');
});