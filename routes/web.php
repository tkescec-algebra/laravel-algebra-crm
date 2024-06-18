<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthController::class . '@showLogin')->middleware('guest');
Route::post('/login', AuthController::class . '@login')->name('login');

Route::get('/register', AuthController::class . '@showRegister')->middleware('guest');
Route::post('/register', AuthController::class . '@register')->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', AdminController::class . '@dashboard')->name('dashboard');
    Route::resource('users', UserController::class);
});

