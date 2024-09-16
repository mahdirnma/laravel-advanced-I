<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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
    Route::get('/admin', [UserController::class, 'index'])->name('index');
    Route::prefix('/admin')->group(function () {
        Route::controller(UserController::class)->middleware(['check_role'])->group(function () {
            Route::get('/users','user_index')->name('users.index');
            Route::get('/users/create','create')->name('user.create');
            Route::post('/users/store','store')->name('user.store');
            Route::get('/users/update/{user}','update')->name('user.update');
            Route::put('/users/edit/{user}','edit')->name('user.edit');
            Route::get('/users/delete/{user}','delete')->name('user.delete');
            Route::delete('/users/destroy/{user}','destroy')->name('user.destroy');
        });
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products','index')->name('products.index');
            Route::get('/products/create','create')->name('product.create');
            Route::post('/products/store','store')->name('product.store');
            Route::get('/products/update/{product}','update')->name('product.update');
            Route::put('/products/edit/{product}','edit')->name('product.edit');
            Route::get('/products/delete/{product}','delete')->name('product.delete');
            Route::delete('/products/destroy/{product}','destroy')->name('product.destroy');
        });
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/categories','index')->name('categories.index');
            Route::get('/categories/create','create')->name('category.create');
            Route::post('/categories/store','store')->name('category.store');
            Route::get('/categories/update/{category}','update')->name('category.update');
            Route::put('/categories/edit/{category}','edit')->name('category.edit');
            Route::get('/categories/delete/{category}','delete')->name('category.delete');
            Route::delete('/categories/destroy/{category}','destroy')->name('category.destroy');
        });
        Route::controller(TagController::class)->group(function () {
            Route::get('/tags','index')->name('tags.index');
            Route::get('/tags/create','create')->name('tag.create');
            Route::post('/tags/store','store')->name('tag.store');
            Route::get('/tags/update/{tag}','update')->name('tag.update');
            Route::put('/tags/edit/{tag}','edit')->name('tag.edit');
            Route::get('/tags/delete/{tag}','delete')->name('tag.delete');
            Route::delete('/tags/destroy/{tag}','destroy')->name('tag.destroy');
        });
    });
});
Route::controller(OrderController::class)->group(function () {
    Route::get('/', 'home')->name('home.show');
    Route::get('/home/profile/{id}', 'home_profile')->name('home.profile');
    Route::get('/buy/panel/{product}','buy_panel')->name('buy.panel');
    Route::get('/buy/show', 'buy_panel_show')->name('buy.panel.show');
});

