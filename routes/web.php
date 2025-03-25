<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/categories/{category}', [CategoryController::class, 'update']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::post('/posts/{post}', [PostController::class, 'update']);

Route::post('/posts', [PostController::class, 'store']);

Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/create', [CategoryController::class, 'create']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);

