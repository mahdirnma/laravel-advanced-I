<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
        Route::controller(UserController::class)->group(function () {
            Route::middleware(['check_role'])->group(function () {
                Route::get('/users','user_index')->name('users.index');
                Route::get('/users/create','create')->name('user.create');
                Route::post('/users/store','store')->name('user.store');
                Route::get('/users/update/{user}','update')->name('user.update');
                Route::put('/users/edit/{user}','edit')->name('user.edit');
                Route::get('/users/delete/{user}','delete')->name('user.delete');
                Route::delete('/users/destroy/{user}','destroy')->name('user.destroy');
            });
        });
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products','index')->name('products.index');
            Route::get('/products/create','create')->name('product.create');
            Route::post('/products/store','store')->name('product.store');
            Route::get('/products/update/{product}','update')->name('product.update');
            Route::put('/products/edit/{product}','edit')->name('product.edit');
//            Route::get('/products/delete/{product}','delete')->name('product.delete');
//            Route::delete('/products/destroy/{product}','destroy')->name('product.destroy');
        });
    });
});
