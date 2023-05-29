@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/S_Course-Detail-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">
</head>

@section('main-section')
    <div class="enroll pop-up" role="alert">
        <form id="enroll-form" action="{{ route('student.enroll', $course->id) }}" method="POST">
            @csrf
            <div class="pop-up-container">
                <p>Are you sure want to enroll to this course?</p>
                <ul class="pop-up-btn">
                    <a id="yes-btn" href="#" onclick="document.getElementById('enroll-form').submit()">
                        <li>Yes</li>
                    </a>
                    <li id="enroll no-btn">No</li>
                </ul>
            </div>
        </form>
    </div>

    <div class="detail">
        <div class="course-profile">
            <div class="course-desc">
                <h3>{{ $course->title }}</h3>
                <p>{{ $course->description }}</p>
                <div class="course-category">
                    <h4>Category : {{ $course->category->name }}</h4>
                </div>
                @if (!$enrolled)
                    <div class="course-enroll">
                        <h4>Enroll</h4>
                    </div>
                @endif
            </div>
        </div>
        <div class="course-tasks">
            @if (sizeof($course->tasks) < 1)
                <div id="empty-line">
                    <h2>Tidak ada Task</h2>
                </div>
            @else
                @foreach ($course->tasks as $task)
                    <div class="task collapsible">
                        <div class="task-title">
                            <h4>{{ $task->name }}</h4>
                            <ul class="task-icons">
                                <li id="coll-btn"><i class="coll-icon fa-solid fa-caret-down fa-2xl"></i></li>
                            </ul>
                        </div>
                        <div class="task-content">
                            <div class="task-video">
                                <iframe src="{{ $task->link }}" frameborder="0"></iframe>
                            </div>
                            <div class="task-desc">
                                <p>{{ $task->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <script src="{{ asset('js/enroll-pop-up.js') }}"></script>
    <script src="{{ asset('js/collapsible.js') }}"></script>
@endsection
