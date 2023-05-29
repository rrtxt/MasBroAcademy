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
                    <h4>{{ $user->name }}</h4>
                    <h5>Student</h5>
                </div>
            </div>
        </div>
        <div class="course-container">
            <h2>Studied Recently</h2>
            <div class="course-cards">
                @foreach ($user->enrollments->courses as $course)
                    <a href="{{ route('student.course.show', $course->id) }}">
                        <div class="course">
                            <div class="card"
                                style="background-image: url({{ asset('storage/' . $course['image']) }}); background-size: cover;">
                            </div>
                            <h3 class="course-title">{{ $course->title }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="/courses">
                <div class="all-courses">
                    <h4>All Courses</h4>
                </div>
            </a>
        </div>
    </div>
@endsection
