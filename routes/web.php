<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthController::class . '@showLogin');
Route::post('/login', AuthController::class . '@login')->name('login');

Route::resource('users', UserController::class);

