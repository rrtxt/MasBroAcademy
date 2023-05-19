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
                <a href="/student/signup">
                    <button class="signup-btn" type="button">Student</button>
                </a>
                <a href="/lecturer/signup">
                    <button class="signup-btn" type="button">Lecture</button>
                </a>
            </div>
        </div>
    </div>
@endsection
