@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Course-style.css') }}">

@section('main-section')
    <form action="{{ route('courses.update', $course['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Update Course</h2>
        <div class="input">
            <h3 for="title-input" id="title">Title</h3>
            <div>
                <input type="text" id="title-input" name="title" placeholder="Title here..." value="{{ $course->title }}">
                <p class="error"></p>
            </div>
        </div>
        <div class="input">
            <h3 for="category" id="category">Category</h3>
            <div id="category-container">
                <select name="category" id="category-input">
                    <option value="">--Please choose an category--</option>
                    <option value="Web Programming">Web Programming</option>
                    <option value="Mobile Programming">Mobile Programming</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Data Science">Data Science</option>
                </select>
                <p class="error"></p>
            </div>
        </div>
        <div class="input">
            <div id="desc">
                <h3 for="desc" id="desc-title">Desc</h3>
            </div>
            <div>
                <textarea type="textarea" name="description" id="desc-input" rows="10" cols="70"
                    placeholder="Description of your course..." ">{{ $course['description'] }}</textarea>
                <p class="error"></p>
            </div>
        </div>
        <button type="submit" id="submit">Update</button>
    </form>

    <script type="module" src="{{ asset('js/image-upload.js') }}"></script>
    <script type="module" src="{{ asset('js/Course-validate.js') }}"></script>
@endsection
