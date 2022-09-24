<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuppleirController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'authenticate']);

// User routes
Route::get('user/index', [UserController::class, 'index']);
Route::post('user/create', [UserController::class, 'create']);
Route::post('user/show', [UserController::class, 'show']);
Route::put('user/update', [UserController::class, 'update']);
Route::delete('user/delete', [UserController::class, 'delete']);

//Category routes
Route::get('category/index', [CategoryController::class, 'index']);
Route::post('category/create', [CategoryController::class, 'create']);
Route::post('category/show', [CategoryController::class, 'show']);
Route::put('category/update', [CategoryController::class, 'update']);
Route::delete('category/delete', [CategoryController::class, 'delete']);

//Suppleir routes
Route::controller(SuppleirController::class)->group(function () {
    Route::get('/suppleir/index', 'index');
    Route::post('/suppleir/create', 'create');
    Route::post('/suppleir/show', 'show');
    Route::put('/suppleir/update', 'update');
    Route::delete('/suppleir/delete', 'delete');
});