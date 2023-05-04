@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/Login-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">

@section('main-section')
    <div class="background-container">
        <form name="log-in" action="/lecturer/login" method="POST">
            @csrf
            <h1 id="login-title">Login</h1>
            <h2>Lecturer</h2>
            <div class="input-container">
                <div class="input">
                    <input type="text" id="username" name="email" placeholder="Email" value="{{ old('email') }}">
                    <p id="username-error"></p>
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="input">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <p id="password-error"></p>
                    @error('password')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="button-container">
                <button type="submit" id="submit">Login</button>
            </div>
        </form>
    </div>

    <script type="module" src="{{ asset('js/Login-validate.js') }}"></script>
    <script type="module" src="{{ asset('js/pop-up.js') }}"></script>
@endsection
