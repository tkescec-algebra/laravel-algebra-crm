<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NavigationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthController::class . '@showLogin')
    ->name('login.show')
    ->middleware('guest');

Route::post('/login', AuthController::class . '@login')
    ->name('login');

Route::get('/register', AuthController::class . '@showRegister')
    ->name('register.show')
    ->middleware('guest');

Route::post('/register', AuthController::class . '@register')
    ->name('register');


Route::middleware('auth')->group(function () {
    Route::get('/logout', AuthController::class . '@logout')
        ->name('logout');

    Route::get('/dashboard', AdminController::class . '@dashboard')
        ->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('clients', ClientController::class);

});

Route::resource('navigations', NavigationController::class);

