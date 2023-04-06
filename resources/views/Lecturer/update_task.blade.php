@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Task-style.css') }}">

@section('main-section')
    <form action="/lecturer/update-task" method="POST">
        @csrf
        <h2>Update Task</h2>
        <div class="input-container">
            <div id="title">
                <label for="title">Title</label>
                <input type="text" name="title" id="title-input">
                <p class="error"></p>
            </div>
            <div id="video">
                <label for="video">Video</label>
                <input type="text" name="video" id="video-input">
                <p class="error"></p>
            </div>
            <div id="desc">
                <label for="desc">Desc</label>
                <textarea name="desc" id="desc-input" cols="69" rows="10"></textarea>
            </div>
            <p class="error"></p>
        </div>
        <button name="submit" id="submit">Create</button>
    </form>

    <script type="module" src="{{ asset('js/Task-validate.js') }}"></script>
@endsection
