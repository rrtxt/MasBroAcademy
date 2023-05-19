@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/Login-style.css') }}">
</head>

@section('main-section')
    <div class="background-container">
        <form name="log-in" action="/student/login" method="POST">
            @csrf
            <h1 id="login-title">Login</h1>
            <h2>Student</h2>
            <div class="input-container">
                <div class="input">
                    <input type="text" id="username" name="username" placeholder="Username">
                    <p id="username-error"></p>
                </div>

                <div class="input">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <p id="password-error"></p>
                </div>
            </div>
            <div class="button-container">
                <button type="submit" id="submit">Login</button>
            </div>
        </form>
    </div>

    <script type='module' src="{{ asset('js/Login-validate.js') }}"></script>
@endsection
