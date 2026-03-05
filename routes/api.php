<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// RESTful routes: index, show, store, update, destroy
Route::apiResource('todos', TodoController::class);

// Custom endpoint to mark as complete
Route::patch('todos/{id}/complete', [TodoController::class, 'complete']);