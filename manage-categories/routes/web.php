<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/unauthorized', [UserController::class, 'unauthorized'])->name('unauthorized');

Route::prefix('/admin')->middleware('auth')->group(function () {
/*    $string_middleware="checkRole:18,2";
    if (Auth::check()) {
        $user=Auth::user();
        dd($user);
        $role=$user->role;
        $age=$user->age;
        $string_middleware="checkRole:$age,$role";
    }*/
    Route::controller(CategoryController::class)->middleware('checkRole')->group(function () {
        Route::get('/category','index')->name('category');
        Route::get('/category/create','create')->name('category.create');
        Route::post('/category/post','store')->name('category.store');
        Route::get('/category/edit/{category}','edit')->name('category.edit');
        Route::put('/category/update/{category}','update')->name('category.update');
        Route::get('/category/delete/{category}','delete')->name('category.delete');
        Route::delete('/category/destroy/{category}','destroy')->name('category.destroy');
    });
});
