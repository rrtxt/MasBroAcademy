<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function register(Request $request)
    {
        $credential = [
            'name' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ];

        if(Student::where('email', $credential['email'])->count() < 1){
            $student = Student::create($credential);
            $enroll_data = [
                'enroll_date' => Date::now(),
                'student_id' => $student->id,
                'created_At' => Date::now(),
                'updated_At' => Date::now(),
            ];
            Enrollment::create($enroll_data);
            return redirect('/student/login');
        }

        Alert::error('email', 'This email has been used, try another email');

        return back();
    }

    public function login(Request $request)
    {
        $credential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(Auth::guard('student')->attempt($credential)){
            $request->session()->regenerate();
            // $user = Auth::guard('student')->user();
            // session(['student' => $user]);
            return redirect('/student/dashboard');
            // ->route('student.dashboard');
        }


        return back()->withErrors([
            'password' => 'This password doesnt match'
        ])->onlyInput('email');
    }

    public function dashboard(){
        $user = Auth::guard('student')->user();
        return view('Student.dashboard', ['user' => $user]);
    }

    public function enroll(Course $course){
        $enroll = Auth::guard('student')->user()->enrollments;
        $enroll->courses()->save($course);
        return back();
    }

    public function logout(Request $request)
    {
        // dd($request);
        auth()->logout();
        // destroy user session and create new (tamu/guest) session

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/posts')->with('success', 'Berhasil logout!');
    }
}
