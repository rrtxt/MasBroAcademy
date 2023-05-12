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
                    <h4>{{ $user->name }}</h4>
                    <h5>Lecturer</h5>
                </div>
            </div>
        </div>
        <div class="course-container">
            <div class="line-course">
                <h2>Your Courses</h2>
                <a href="{{ route('courses.create') }}">
                    <h4 id="add-course">Add Course</h4>
                </a>
            </div>
            <div class="course-cards">
                @if (sizeof($user->courses) < 1)
                    <div id="empty-line">
                        <h2>Tidak ada course</h2>
                    </div>
                @else
                    @foreach ($user->courses as $course)
                        <a href="{{ route('courses.show', $course->id) }}">
                            <div class="course">
                                <div class="card"
                                    style="background-image: url({{ asset('storage/' . $course['image']) }}); background-size: cover;">
                                </div>
                                <h3 class="course-title">{{ $course->title }}</h3>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
            <a href="/courses">
                <div class="all-courses">
                    <h4>All Courses</h4>
                </div>
            </a>
        </div>
    </div>
@endsection
