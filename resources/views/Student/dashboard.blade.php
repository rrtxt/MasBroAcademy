@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/Student-Dashboard-style.css') }}">
</head>

@section('main-section')
    <div class="dashboard">
        <div class="avatar-container">
            <div class="profile">
                <img src="{{ asset('image/chumimin.jpeg') }}" alt="">
                <div class="profile-text">
                    <h4>Rizfi Ferdiansyah</h4>
                    <h5>College Student</h5>
                </div>
            </div>
        </div>
        <div class="course-container">
            <h2>Studied Recently</h2>
            <div class="course-cards">
                <a href="/course"></a>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
                <div class="course">
                    <div class="card">

                    </div>
                    <h3 class="course-title">Babi guling</h3>
                </div>
            </div>
            <a href="/Courses">
                <div class="all-courses">
                    <h4>All Courses</h4>
                </div>
            </a>
        </div>
    </div>
@endsection
