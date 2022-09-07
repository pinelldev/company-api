<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'authenticate']);
Route::get('user/index', [UserController::class, 'index']);