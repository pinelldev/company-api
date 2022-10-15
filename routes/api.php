<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SuppleirController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'authenticate']);

// User routes
Route::controller(UserController::class)->group(function () {
    Route::get('user/index', 'index');
    Route::post('user/create', 'create');
    Route::post('user/show', 'show');
    Route::put('user/update', 'update');
    Route::delete('user/delete', 'delete');
});

//Category routes
Route::controller(CategoryController::class)->group(function () {
    Route::get('category/index', 'index');
    Route::post('category/create', 'create');
    Route::post('category/show', 'show');
    Route::put('category/update', 'update');
    Route::delete('category/delete', 'delete');
});

//Suppleir routes
Route::controller(SuppleirController::class)->group(function () {
    Route::get('/suppleir/index', 'index');
    Route::post('/suppleir/create', 'create');
    Route::post('/suppleir/show', 'show');
    Route::put('/suppleir/update', 'update');
    Route::delete('/suppleir/delete', 'delete');
});

//Product routes
Route::controller(ProductController::class)->group(function () {
    Route::get('/product/index', 'index');
    Route::post('/product/create', 'create');
    Route::post('/product/show', 'show');
    Route::put('/product/update', 'update');
    Route::delete('/product/delete', 'delete');
});

//Customer routes
Route::controller(CustomerController::class)->group(function () {
    Route::get('/customer/index', 'index');
    Route::post('/customer/create', 'create');
    Route::post('/customer/show', 'show');
    Route::put('/customer/update', 'update');
    Route::delete('/customer/delete', 'delete');
});