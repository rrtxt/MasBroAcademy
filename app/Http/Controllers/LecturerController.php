<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LecturerController extends Controller
{
    public function register(Request $request){
        $credential = [
            'name' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ];
        
        if(Lecturer::where('email', $credential['email'])->count() < 1){
            Lecturer::create($credential);
            return redirect('/lecturer/login');
        }

        Alert::error('email', 'This email has been used, try another email');

        return back();
    }

    public function login(Request $request){
        $credential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect('/lecturer/dashboard');
        }

        return back()->withErrors([
            'email' => 'This email doesnt match',
            'password' => 'This password doesnt match'
        ])->onlyInput('email');
    }
}
