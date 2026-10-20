<?php

use App\Http\Controllers\web\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'showLogin')->name('login');
    Route::post('/login', 'login')->name('login.post');

    Route::get('/registro', 'showRegister')->name('registro');
    Route::post('/registro', 'register')->name('register.post');

    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});