<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});
//
////Route::middleware(['auth', 'access_panel'])->group(function () {
//    Route::get('/panel', [\App\Http\Controllers\PanelController::class, 'index'])->name('panel.view');
//    Route::post('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
////});

//Route::get('/test', [App\Http\Controllers\EmailTestController::class, 'send']);
