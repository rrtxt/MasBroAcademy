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
    return view('home');
});

Route::get('/student-signup', function () {
    return view('Student.signup');
});
Route::post('/student-signup', function(){
    return redirect('/student-login');
});

Route::get('/student-login', function(){
    return view('Student.login');
});
Route::get('/student-login', function(){
    return redirect('/student-dashboard');
});

Route::get('/student-dashboard', function(){
    return view('Student.dashboard');
});

Route::get('/Courses', function(){
    return view('courses');
});

Route::get('/course', function(){
    return view('Student.course');
});