<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\PayoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::match(['put', 'patch'], '/student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');


Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::match(['put', 'patch'], '/teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::get('/teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::delete('/teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');


Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::match(['put', 'patch'], '/course/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');
Route::delete('/course/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

Route::get('/batch', [BatchController::class, 'index'])->name('batch.index');
Route::get('/batch/create', [BatchController::class, 'create'])->name('batch.create');
Route::post('/batch', [BatchController::class, 'store'])->name('batch.store');
Route::get('/batch/{id}/edit', [BatchController::class, 'edit'])->name('batch.edit');
Route::match(['put', 'patch'], '/batch/{id}', [BatchController::class, 'update'])->name('batch.update');
Route::get('/batch/{id}', [BatchController::class, 'show'])->name('batch.show');
Route::delete('/batch/{id}', [BatchController::class, 'destroy'])->name('batch.destroy');


Route::get('/payouts', [PayoutController::class, 'index'])->name('payouts.index');
Route::get('/payouts/create', [PayoutController::class, 'create'])->name('payouts.create');
Route::post('/payouts', [PayoutController::class, 'store'])->name('payouts.store');
Route::get('/payouts/{id}/edit', [PayoutController::class, 'edit'])->name('payouts.edit');
Route::match(['put', 'patch'], '/payouts/{id}', [PayoutController::class, 'update'])->name('payouts.update');
Route::get('/payouts/{id}', [PayoutController::class, 'show'])->name('payouts.show');
Route::delete('/payouts/{id}', [PayoutController::class, 'destroy'])->name('payouts.destroy');


Route::get('/home', [HomeController::class, 'index'])->name('home.index');

