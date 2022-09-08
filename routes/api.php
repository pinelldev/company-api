<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'authenticate']);

Route::get('user/index', [UserController::class, 'index']);
Route::post('user/create', [UserController::class, 'create']);
Route::post('user/show', [UserController::class, 'show']);
Route::put('user/update', [UserController::class, 'update']);
Route::delete('user/delete', [UserController::class, 'delete']);