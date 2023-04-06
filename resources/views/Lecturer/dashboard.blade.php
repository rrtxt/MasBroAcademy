@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/Lecture-Dashboard-style.css') }}">
</head>

@section('main-section')
    <div class="dashboard">
        <div class="avatar-container">
            <div class="profile">
                <img src="{{ asset('image/chumimin.jpeg') }}" alt="">
                <div class="profile-text">
                    <h4>Rizfi Ferdiansyah</h4>
                    <h5>Lecturer</h5>
                </div>
            </div>
        </div>
        <div class="course-container">
            <div class="line-course">
                <h2>Your Courses</h2>
                <a href="/lecturer/add-course">
                    <h4 id="add-course">Add Course</h4>
                </a>
            </div>
            <div class="course-cards">
                <a href="/lecturer/course">
                    <div class="course">
                        <div class="card">
                        </div>
                        <h3 class="course-title">Babi guling</h3>
                    </div>
                </a>
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
            <a href="/courses">
                <div class="all-courses">
                    <h4>All Courses</h4>
                </div>
            </a>
        </div>
    </div>
@endsection
