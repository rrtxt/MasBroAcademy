@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/S_Course-Detail-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">
</head>

@section('main-section')
    <div class="pop-up" role="alert">
        <form action="/course" method="POST">
            <div class="pop-up-container">
                <p>Are you sure want to enroll this class</p>
                <ul class="pop-up-btn">
                    <a id="yes-btn" href="">
                        <li>Yes</li>
                    </a>
                    <li id="no-btn">No</li>
                </ul>
            </div>
        </form>
    </div>

    <div class="detail">
        <div class="course-profile">
            <div class="course-desc">
                <h3>Course Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum diam sed ex mattis, a hendrerit
                    lectus pulvinar. Duis nec ligula elementum, vehicula velit sed, fermentum quam. Donec vel velit nisi.
                    Sed at luctus augue. Proin eu ante in augue bibendum tincidunt. Sed blandit ullamcorper lacinia. Quisque
                    venenatis laoreet iaculis. Vestibulum tortor turpis, porttitor molestie fringilla eget, porttitor eu
                    dui. Ut ac urna justo. Aliquam nec imperdiet ante. Suspendisse mi sapien, molestie sed tempor sed,
                    volutpat sed felis.</p>
                <div class="course-category">
                    <h4>Category : Web Programming</h4>
                </div>
                <div class="enroll">
                    <h4>Enroll</h4>
                </div>
            </div>
        </div>
        <div class="course-tasks">
            <div class="task collapsible">
                <div class="task-title">
                    <h4>HTML 101</h4>
                    <ul class="task-icons">
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
            </div>
            <div class="task collapsible">
                <div class="task-title">
                    <h4>HTML 101</h4>
                    <ul class="task-icons">
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
            </div>

        </div>
    </div>

    <script src="{{ asset('js/pop-up.js') }}"></script>
    <script src="{{ asset('js/collapsible.js') }}"></script>
@endsection
