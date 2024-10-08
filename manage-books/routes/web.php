<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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
Route::redirect('/','/books',302);
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('books', BookController::class)->except(['show'])->middleware(['auth'])->middleware('checkRole');


Route::get('/rent', [UserController::class, 'rent_show'])->name('rent.show');
Route::post('/rent/{book}', [UserController::class, 'rent'])->name('rent');
Route::get('/user/panel', [UserController::class, 'user_panel'])->name('user.panel');
