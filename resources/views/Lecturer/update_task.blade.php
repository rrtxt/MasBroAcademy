@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Task-style.css') }}">

@section('main-section')
    <form action="{{ route('courses.tasks.update', [$course->id, $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Update Task</h2>
        <div class="input-container">
            <div id="title">
                <label for="title">Title</label>
                <input type="text" name="name" id="title-input" value="{{ $task->name }}">
                <p class="error"></p>
            </div>
            <div id="video">
                <label for="video">Video</label>
                <input type="text" name="link" id="video-input" value="{{ $task->link }}">
                <p class="error"></p>
            </div>
            <div id="desc">
                <label for="desc">Desc</label>
                <textarea name="description" id="desc-input" cols="69" rows="10">{{ $task->description }}</textarea>
            </div>
            <p class="error"></p>
        </div>
        <button name="submit" id="submit">Create</button>
    </form>

    <script type="module" src="{{ asset('js/Task-validate.js') }}"></script>
@endsection
