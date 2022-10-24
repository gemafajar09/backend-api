<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('login',[UserController::class, 'login'])->name('login');
Route::post('register',[UserController::class, 'register'])->name('register');
Route::get('users',[UserController::class, 'getAll'])->name('users');