<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\Authenticate;
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
    // dd(Route::getCurrentRoute()->uri());
    return view('home');
})->name('home');

Route::prefix('student')->group(function(){
    Route::get('/signup', function () {
        return view('Student.signup');
    });
    Route::post('/signup', function(){
        return redirect('/student-login');
    });

    Route::get('/login', function(){
        return view('Student.login');
    });
    Route::post('/login', function(){
        return redirect('/student-dashboard');
    });

    Route::get('/dashboard', function(){
        return view('Student.dashboard');
    });

    Route::get('/course', function(){
        return view('Student.course');
    });
});


Route::get('/courses', [CourseController::class, 'index']);



Route::prefix('lecturer')->group(function(){
    Route::get('/signup', function(){
        return view('Lecturer.signup');
    });

    Route::post('/signup', [LecturerController::class, 'register']);

    Route::get('/login', function(){
        return view('Lecturer.login');
    })->name('lecturer.login');

    Route::post('/login', [LecturerController::class, 'login']);

    Route::middleware([Authenticate::class])->group(function(){
        Route::get('/dashboard', [LecturerController::class, 'index'])-> name('lecturer.dashboard');
        Route::resource('courses', CourseController::class);

        Route::resource('courses.tasks', TaskController::class);
    });

});

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/login', [AdminController::class, 'index']);
    Route::post('/login', [AdminController::class, 'login']);
    Route::resource('category', CategoryController::class);
});

Route::get('/logout', [LecturerController::class, 'logout']);
