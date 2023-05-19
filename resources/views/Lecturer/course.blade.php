@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/L_Course-detail-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">
{{-- <script src="https://kit.fontawesome.com/b20f20a710.js" crossorigin="anonymous"></script> --}}

@section('main-section')
    <div class="course pop-up" role="alert">
        <form id="course-delete-form" action="{{ route('courses.destroy', $course['id']) }}" method="POST">
            @method('DELETE')
            @csrf
            <div class="pop-up-container">
                <p>Are you sure want to delete this course?</p>
                <ul class="pop-up-btn">
                    <a id="yes-btn" href="#" onclick="document.getElementById('course-delete-form').submit()">
                        <li>Yes</li>
                    </a>
                    <li id="course no-btn">No</li>
                </ul>
            </div>
        </form>
    </div>
    <div class="detail">
        <div class="course-profile">
            <div class="course-desc">
                <div class="course-title">
                    <h3>{{ $course['title'] }}</h3>
                    <div>
                        <ul class="title-icons">
                            <li><a href="{{ route('courses.edit', $course['id']) }}"><i
                                        class="fa-regular fa-pen-to-square fa-xl"></i></a>
                            </li>
                            <li class="course-delete"><i class="fa-solid fa-trash-can fa-xl"></i></li>
                        </ul>
                    </div>
                </div>
                <p>{{ $course['description'] }}</p>
                <div class="course-category">
                    <h4>Category : {{ $course->category->name }}</h4>
                </div>
            </div>
        </div>
        <div class="course-tasks">
            @foreach ($course->tasks as $task)
                <div class="task pop-up" role="alert">
                    <form id="task-delete-form {{ $task->id }}"
                        action="{{ route('courses.tasks.destroy', [$course->id, $task->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="pop-up-container">
                            <p>Are you sure want to delete this task?</p>
                            <ul class="pop-up-btn">
                                <a class="yes-btn" href="#"
                                    onclick="document.getElementById('task-delete-form {{ $task->id }}').submit()">
                                    <li>Yes</li>
                                </a>
                                <li class="task no-btn">No</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="task collapsible">
                    <div class="task-title">
                        <h4>{{ $task->name }}</h4>
                        <ul class="task-icons">
                            <li>
                                <a href="{{ route('courses.tasks.edit', [$course->id, $task->id]) }}"><i
                                        class="fa-regular fa-pen-to-square fa-xl"></i>
                                </a>
                            </li>
                            <li class="task-delete"><i class="fa-solid fa-trash-can fa-xl"></i></li>
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
            {{-- <div class="task collapsible">
                <div class="task-title">
                    <h4>CSS 101</h4>
                    <ul class="task-icons">
                        <li><a href=""><i class="fa-regular fa-pen-to-square fa-xl"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-trash-can fa-xl"></i></a></li>
                        <li id="coll-btn"><i class="coll-icon fa-solid fa-caret-down fa-2xl"></i></li>
                    </ul>
                </div>
                <div class="task-content">
                    <div class="task-video">
                        <iframe src="https://youtube.com/embed/SCwcJsBYL3o" frameborder="0"></iframe>
                    </div>
                    <div class="task-desc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum diam sed ex mattis, a
                            hendrerit lectus pulvinar. Duis nec ligula elementum, vehicula velit sed, fermentum quam. Donec
                            vel velit nisi. Sed at luctus augue. Proin eu ante in augue bibendum tincidunt. Sed blandit
                            ullamcorper lacinia. Quisque venenatis laoreet iaculis. Vestibulum tortor turpis, porttitor
                            molestie fringilla eget, porttitor eu dui. Ut ac urna justo. Aliquam nec imperdiet ante.
                            Suspendisse mi sapien, molestie sed tempor sed, volutpat sed felis.</p>
                    </div>
                </div>
            </div> --}}
            <a href="{{ route('courses.tasks.create', $course['id']) }}">
                <div class="add-course">
                    <h4>Create Task</h4>
                </div>
            </a>
        </div>
    </div>
    <script src="{{ asset('js/collapsible.js') }}"></script>
    <script type="module" src="{{ asset('js/course-delete-pop-up.js') }}"></script>
    <script src="{{ asset('js/task-delete-pop-up.js') }}"></script>
@endsection
