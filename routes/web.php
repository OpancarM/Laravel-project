<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Http\Request;
use App\Models\Posts;

Route::get('/', [PostsController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/posts/create', [PostsController::class, 'create']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/{posts}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{posts}', [PostsController::class, 'update']);
Route::delete('/dashboard/{posts}', [DashboardController::class, 'destroy']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');



