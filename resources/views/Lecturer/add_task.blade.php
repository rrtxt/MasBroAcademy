@extends('layouts.main')

<link rel="stylesheet" href="{{ Asset('css/Task-style.css') }}">

@section('main-section')
    <form action="{{ route('courses.tasks.store', $course['id']) }}" method="POST">
        @csrf
        <h2>Create Task</h2>
        <div class="input-container">
            <div id="title">
                <label for="title">Title</label>
                <input type="text" name="name" id="title-input">
                <p class="error"></p>
            </div>
            <div id="video">
                <label for="video">Video</label>
                <input type="text" name="link" id="video-input">
                <p class="error"></p>
            </div>
            <div id="desc">
                <label for="desc">Desc</label>
                <textarea name="description" id="desc-input" cols="69" rows="10"></textarea>
            </div>
            <p class="error"></p>
        </div>
        <button name="submit" id="submit">Create</button>
    </form>

    <script type="module" src="{{ asset('js/Task-validate.js') }}"></script>
@endsection
