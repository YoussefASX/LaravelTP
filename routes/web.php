<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
Route::get('/', function () {
    return view('welcome');
});

// route to fetch all users (for SAL server)
Route::get('/sal/users', [\App\Http\Controllers\UserController::class, 'index']);

// route to fetch all products
Route::get('/sal/products', [\App\Http\Controllers\ProductController::class, 'index']);


Route::get('/sal/products/{id}', [\App\Http\Controllers\ProductController::class, 'GetById']);
Route::get('/sal/products/create', [\App\Http\Controllers\ProductController::class, 'Create']);
Route::get('/sal/products/delete/{id}', [\App\Http\Controllers\ProductController::class, 'Delete']);
// RESTful routes: index, show, store, update, destroy
Route::apiResource('/api/todos', TodoController::class);

// Custom endpoint to mark as complete
Route::patch('/api/todos/{id}/complete', [TodoController::class, 'complete']);