@extends('layouts.main')

<head>
    <link rel="stylesheet" href="{{ asset('css/Sign-Up-style.css') }}">
</head>

@section('main-section')
    <div class="background-container">
        <form name="sign-in" action='/student/signup' method="POST">
            @csrf
            <h1 id="sign-up-title">Sign Up <br> Student</h1>
            <div class="input">
                <input type="text" id="username" name="username" placeholder="Username">
                <p id="username-error"></p>
            </div>
            <div class="input">
                <input type="text" id="email" name="email" placeholder="Email">
                <p id="email-error"></p>
            </div>

            <div class="input">
                <input type="password" id="password" name="password" placeholder="Password">
                <p id="password-error"></p>
            </div>

            <div class="input">
                <input type="password" id="confirm-password" name="Confirm Password" placeholder="Confirm your password">
            </div>

            <div class="button-container">
                <button type="submit" id="submit">Sign Up</button>
            </div>
        </form>
    </div>
    <script type='module' src="{{ asset('js/Sign-Up-validate.js') }}"></script>
@endsection
