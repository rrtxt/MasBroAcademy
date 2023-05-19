@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Course-style.css') }}">

@section('main-section')
    <form action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <h2>Update Category</h2>
        <div id="cover">
            <input type="file" name="cover" id="img-input" accept="image/*" value="Cover">
            {{-- style="background-image: url({{ asset('storage/' . $category->img_link) }}); background-size: cover;"> --}}
            <h3>Cover</h3>
            <p class="error"></p>
        </div>
        <div class="input">
            <h3 for="title-input" id="title">Title</h3>
            <div>
                <input type="text" id="title-input" name="title" placeholder="Title here..."
                    value="{{ $category->name }}">
                <p class="error"></p>
            </div>
        </div>
        <button type="submit" id="submit">Update</button>
    </form>

    <script type="module" src="{{ asset('js/image-upload.js') }}"></script>
    <script type="module" src="{{ asset('js/Course-validate.js') }}"></script>
@endsection
