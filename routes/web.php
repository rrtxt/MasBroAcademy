<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use GuzzleHttp\Psr7\Uri;
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
Route::post('/student-login', function(){
    return redirect('/student-dashboard');
});

Route::get('/student-dashboard', function(){
    return view('Student.dashboard');
});

Route::get('/courses', function(){
    return view('courses');
});

Route::get('/course', function(){
    return view('Student.course');
});


Route::prefix('lecturer')->group(function(){
    Route::get('/signup', function(){
        return view('Lecturer.signup');
    });
    
    Route::post('/signup', [LecturerController::class, 'register']);
    
    Route::get('/login', function(){
        return view('Lecturer.login');
    });
    Route::post('/login', [LecturerController::class, 'login']);
    
    Route::resource('course', CourseController::class);
    
    Route::get('/dashboard', [LecturerController::class, 'index'])->name('lecturer.dashboard');

    Route::resource('courses', CourseController::class);

    // Route::get('/course/{id}',[CourseController::class, 'show']);
    
    // Route::get('/add-course', function(){
    //     return view('Lecturer.add_course');
    // });
    // Route::post('/add-course', [CourseController::class, 'store']);
    // Route::get('/update-course', function(){
    //     return view('Lecturer.update_course');
    // });
    // Route::post('/update-course', function(){
    //     return redirect('/lecturer/course');
    // });

    Route::get('/add-task', function(){
        return view('Lecturer.add_task');
    });
    Route::post('/add-task', function(){
        return redirect('/lecturer/course');
    });

    Route::get('/update-task', function(){
        return view('Lecturer.update_task');
    });
    Route::post('/update-task', function(){
        return redirect(('/lecturer/course'));
    });
});