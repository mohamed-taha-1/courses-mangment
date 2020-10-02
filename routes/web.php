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

Route::get('/', function () {
    return view('welcome');
});


Route::get('', function () {
    return view('welcome');
});
//********************************************************courses page***********************
Route::view('courses', 'courses.courses');
Route::post('courses/submit', 'App\Http\Controllers\courses@save');

//************************* */ student  routes *************
Route::view('student', 'student.student');
Route::post('students/submit', 'App\Http\Controllers\students@save');

// *****************instructor routs************
Route::view('instructor', 'instructor.instructor');
Route::post('instructors/submit', 'App\Http\Controllers\instructors@save');
