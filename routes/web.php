<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/admin/teacher', [\App\Http\Controllers\TeacherController::class, 'teacher']);

Route::get('/admin/teacher/teacher', [\App\Http\Controllers\TeacherController::class, 'create']);
Route::get('/admin/teacher/list', [\App\Http\Controllers\TeacherController::class, 'list']);
Route::get('/admin/teacher/detail', [\App\Http\Controllers\TeacherController::class, 'detail']);
Route::get('/admin/teacher/update', [\App\Http\Controllers\TeacherController::class, 'update']);
Route::get('/admin/teacher/delete', [\App\Http\Controllers\TeacherController::class, 'delete']);


Route::get('/admin/students/student', [\App\Http\Controllers\StudentController::class, 'create']);
Route::get('/admin/students/list', [\App\Http\Controllers\StudentController::class, 'list']);
Route::get('/admin/students/detail', [\App\Http\Controllers\StudentController::class, 'detail']);
Route::get('/admin/students/update', [\App\Http\Controllers\StudentController::class, 'update']);
Route::get('/admin/students/delete', [\App\Http\Controllers\StudentController::class, 'delete']);
