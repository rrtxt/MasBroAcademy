<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        return view('Admin.login');
    }

    public function dashboard(){
        $categories = Category::all();
        return view('Admin.dashboard', compact('categories'));
    }

    public function login(Request $request){
        $credential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        // dd(Auth::guard('admin')->attempt($credential));

        if(Auth::guard('admin')->attempt($credential)){
            $request->session()->regenerate();
            $user = Auth::guard('admin')->user();
            session(['admin' => $user]);
            return redirect()->route('admin.dashboard');
        }


        return back()->withErrors([
            'password' => 'This password doesnt match'
        ])->onlyInput('email');
    }
}
