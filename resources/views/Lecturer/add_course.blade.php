@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Course-style.css') }}">

@section('main-section')
    <form action="{{ route('courses.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <h2>Create Course</h2>
        <div id="cover">
            <input type="file" name="cover" id="img-input" accept="image/*" value="Cover">
            <h3>Cover</h3>
            <p class="error"></p>
        </div>
        <div class="input">
            <h3 for="title-input" id="title">Title</h3>
            <div>
                <input type="text" id="title-input" name="title" placeholder="Title here...">
                <p class="error"></p>
            </div>
        </div>
        <div class="input">
            <h3 for="category" id="category">Category</h3>
            <div id="category-container">
                <select name="category" id="category-input">
                    <option value="">--Please choose an category--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <p class="error"></p>
            </div>
        </div>
        <div class="input">
            <div id="desc">
                <h3 for="desc" id="desc-title">Desc</h3>
            </div>
            <div>
                <textarea type="textarea" name="desc" id="desc-input" rows="10" cols="70"
                    placeholder="Description of your course..."></textarea>
                <p class="error"></p>
            </div>
        </div>
        <button type="submit" id="submit">Create</button>
    </form>

    <script type="module" src="{{ asset('js/image-upload.js') }}"></script>
    <script type="module" src="{{ asset('js/Course-validate.js') }}"></script>
@endsection
