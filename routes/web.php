<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLoginForm'])
    ->name('home')->middleware(RedirectIfAuthenticated::class);

Route::post('/', [AuthController::class, 'login'])
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::resource('productos', ProductController::class)
    ->middleware(RedirectIfAuthenticated::class);

Route::resource('user', UserController::class)
    ->middleware(RedirectIfAuthenticated::class);

Route::get('/dashboard', [DashboardController::class, 'showInicio'])
    ->name('dashboard')
    ->middleware(AuthMiddleware::class);