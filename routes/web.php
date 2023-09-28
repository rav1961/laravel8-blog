<?php

use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthLogoutController;
use App\Http\Controllers\Auth\AuthRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', fn () => view('auth.login'))->name('login.view');
    Route::get('register', fn () => view('auth.register'))->name('register.view');

    Route::post('login', AuthLoginController::class)->name('login');
    Route::post('register', AuthRegisterController::class)->name('register');
});

Route::middleware(['auth', 'checkUserRole'])->group(function () {
    Route::get('panel', fn () => view('panel.index'))->name('panel.index');
    Route::get('logout', AuthLogoutController::class)->name('logout');
});
