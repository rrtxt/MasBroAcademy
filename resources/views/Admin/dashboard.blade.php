@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/Admin-Dashboard-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">
</head>

@section('main-section')
    <div class="dashboard">
        <div class="avatar-container">
            <div class="profile">
                <img src="{{ asset('image/chumimin.jpeg') }}" alt="">
                <div class="profile-text">
                    <h4>{{ session('admin')->name }}</h4>
                    <h5>Admin</h5>
                </div>
            </div>
        </div>
        <div class="course-container">
            <div class="line-course">
                <h2>All Category</h2>
                <a href="{{ route('category.create') }}">
                    <h4 id="add-course">Add Category</h4>
                </a>
            </div>
            <div class="course-cards">
                <table class="category-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                            <div class="category pop-up" role="alert">
                                <form id="category-delete-form {{ $category->id }}"
                                    action="{{ route('category.destroy', $category->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <div class="pop-up-container">
                                        <p>Are you sure want to delete this task?</p>
                                        <ul class="pop-up-btn">
                                            <a class="yes-btn" href="#"
                                                onclick="document.getElementById('category-delete-form {{ $category->id }}').submit()">
                                                <li>Yes</li>
                                            </a>
                                            <li class="category no-btn">No</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <ul class="action-icon">
                                        <li>
                                            <a href="{{ route('category.edit', $category->id) }}">
                                                <i class="edit-icon fa-solid fa-pen-to-square fa-xl"></i>
                                            </a>
                                        </li>
                                        <li class="category-delete">
                                            <i class="del-icon fa-solid fa-trash fa-xl"></i>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="" src="{{ asset('js/category-pop-up.js') }}"></script>
@endsection
