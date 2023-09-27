<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::get('register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
});

Route::middleware(['auth', 'access_panel'])->group(function () {
    Route::get('/panel', [\App\Http\Controllers\PanelController::class, 'index'])->name('panel');
});

//Route::get('/test', [App\Http\Controllers\EmailTestController::class, 'send']);
