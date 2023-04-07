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
            'lecturer_name' => $request['username'],
            'lecturer_email' => $request['email'],
            'lecturer_password' => Hash::make($request['password']),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ];
        
        if(Lecturer::where('lecturer_email', $credential['lecturer_email'])->count() < 1){
            Lecturer::create($credential);
            return redirect('/lecturer/login');
        }

        Alert::error('email', 'This email has been used, try another email');

        return back();
    }



    // public function login(){
        
    // }
}
