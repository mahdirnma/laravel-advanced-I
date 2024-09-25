<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
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

Route::get('/', [UserConttroller::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/login', [UserConttroller::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [UserConttroller::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::controller(CountryController::class)->group(function () {
        Route::get('/country','index')->name('country');
        Route::get('/country/create','create')->name('country.create');
        Route::post('/country/store', 'store')->name('country.store');
        Route::get('/country/edit/{country}','edit')->name('country.edit');
        Route::put('/country/update/{country}', 'update')->name('country.update');
        Route::get('/country/delete/{country}','delete')->name('country.delete');
        Route::delete('/country/destroy/{country}', 'destroy')->name('country.destroy');
    });
});
/*Route::get('/a', function () {
    \Illuminate\Support\Facades\Auth::loginUsingId('1');
    return to_route('dashboard');
});*/
