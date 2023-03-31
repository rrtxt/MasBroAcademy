@extends('layouts.main')

@section('main-section')

    <head>
        <link rel="stylesheet" href="{{ asset('css/Home-style.css') }}">
    </head>
    <div class="background-container">
        <div class="home-container">
            <h1>Selamat datang di MasBroAcademy</h1>
            <h3>Belajar dan mengajar dimana saja</h3>
            <h4>START NOW AS</h4>
            <div class="button-container">
                <a href="./Student_Sign_Up.html">
                    <button class="signup-btn" type="button">Student</button>
                </a>
                <a href="./Lecture_Sign_Up.html">
                    <button class="signup-btn" type="button">Lecture</button>
                </a>
            </div>
        </div>
    </div>
@endsection
