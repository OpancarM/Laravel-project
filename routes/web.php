<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All News
Route::get('/', [NewsController::class, 'index']);

// Show Create Form
Route::get('/news/create', [NewsController::class, 'create'])->middleware('auth');

// Store News Data
Route::post('/news', [NewsController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/news/{newss}/edit', [NewsController::class, 'edit'])->middleware('auth');

// Update News
Route::put('/news/{newss}', [NewsController::class, 'update'])->middleware('auth');

// Delete News
Route::delete('/news/{newss}', [NewsController::class, 'destroy'])->middleware('auth');

// Manage News
Route::get('/news/manage', [NewsController::class, 'manage'])->middleware('auth');

// Single News
Route::get('/news/{newss}', [NewsController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
