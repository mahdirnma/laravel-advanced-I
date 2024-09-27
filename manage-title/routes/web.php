<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TitleController;
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
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::controller(TitleController::class)->group(function () {
        Route::get('/title','index')->name('title.index');
        Route::get('/title/create','create')->name('title.create');
        Route::post('/title/store','store')->name('title.store');
        Route::get('/title/edit/{title}','edit')->name('title.edit');
        Route::put('/title/update/{title}','update')->name('title.update');
        Route::get('/title/delete/{title}','delete')->name('title.delete');
        Route::delete('/title/destroy/{title}','destroy')->name('title.destroy');
    });
});
