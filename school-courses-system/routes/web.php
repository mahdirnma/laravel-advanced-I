<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\UserController;
use App\Models\Course;
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
Route::prefix('/admin')->group(function () {
    Route::controller(ProfessorController::class)->group(function () {
        Route::get('/professor', 'index')->name('professor.index');
        Route::get('/professor/create','create')->name('professor.create');
        Route::post('/professor/store','store')->name('professor.store');
        Route::get('/professor/update/{professor}','update')->name('professor.update');
        Route::put('/professor/edit/{professor}','edit')->name('professor.edit');
        Route::get('/professor/delete/{professor}','delete')->name('professor.delete');
        Route::delete('/professor/destroy/{professor}','destroy')->name('professor.destroy');
    });
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course', 'index')->name('course.index');
        Route::get('/course/create','create')->name('course.create');
        Route::post('/course/store','store')->name('course.store');
        Route::get('/course/update/{course}','update')->name('course.update');
        Route::put('/course/edit/{course}','edit')->name('course.edit');
        Route::get('/course/delete/{course}','delete')->name('course.delete');
        Route::delete('/course/destroy/{course}','destroy')->name('course.destroy');

        Route::prefix('/course/student')->group(function () {
            Route::get('/{course}', 'student')->name('course.student.index');
            Route::get('/create/{course}', 'student_create')->name('course.student.create');
            Route::post('/store/{course}', 'student_store')->name('course.student.store');
            Route::delete('/destroy/{course}{student}', 'student_destroy')->name('course.student.destroy');
        });
    });
});
