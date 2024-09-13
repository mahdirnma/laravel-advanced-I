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

Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['authh'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::prefix('/admin')->group(function () {
        Route::middleware(['check_role'])->group(function () {
            Route::get('/users', [UserController::class, 'user_index'])->name('users.index');
            Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/users/update/{user}', [UserController::class, 'update'])->name('user.update');
            Route::put('/users/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
            Route::get('/users/delete/{user}', [UserController::class, 'delete'])->name('user.delete');
            Route::delete('/users/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        });
    });
});
