@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/All-Courses-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/env-style.css') }}">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
</head>

@section('main-section')
    <div id="search-bar-container">
        <form action="" method="GET">
            <input type="search" name="search" placeholder="Search..." id="search-bar">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="trend-courses">
        <h3 id="trend-title">Trending Courses</h3>
        <div class="course-cards">
            <div class="row">
                @foreach ($courses as $course)
                    <a href="{{ route('courses.show', $course->id) }}">
                        <div class="course">
                            <div class="card"
                                style="background-image: url({{ asset('storage/' . $course['image']) }}); background-size: cover;">
                            </div>
                            <h3 class="course-title">{{ $course->title }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="categories">
        <h3 id="categories-title">
            Categories
        </h3>
        <div class="categories-container">
            <div id="left-button"><i class="fa-solid fa-chevron-left fa-2xl"></i></div>
            @foreach ($categories as $category)
                <div class="category w3-animate-zoom" style="display: block;">
                    <div class="card"
                        style="background-image: url({{ asset('storage/' . $category->img_link) }}); background-size: cover;">

                    </div>
                    <h3 class="category-title">{{ $category->name }}</h3>
                </div>
            @endforeach
            {{-- <div class="category w3-animate-zoom" style="display: block;">
                <div class="card">

                </div>
                <h3 class="category-title">Mobile Programming</h3>
            </div>
            <div class="category w3-animate-zoom" style="display: block;">
                <div class="card">

                </div>
                <h3 class="category-title">Machine Learning</h3>
            </div>
            <div class="category w3-animate-zoom" style="display: none;">
                <div class="card">

                </div>
                <h3 class="category-title">Calculus</h3>
            </div>
            <div class="category w3-animate-zoom" style="display: block;">
                <div class="card">

                </div>
                <h3 class="category-title">Data Science</h3>
            </div> --}}
            <div id="right-button"><i class="fa-solid fa-chevron-right fa-2xl"></i></div>
        </div>
    </div>

    <script type="module" src="{{ asset('js/carousel.js') }}"></script>
@endsection
