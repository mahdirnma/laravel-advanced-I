<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('dashboard');
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signin', [UserController::class, 'signin'])->name('signin.show');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
