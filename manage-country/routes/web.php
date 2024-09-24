<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserConttroller;
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

Route::get('/', [UserConttroller::class, 'index'])->name('dashboard');
Route::get('/login', [UserConttroller::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [UserConttroller::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
