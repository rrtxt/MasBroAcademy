<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/env-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-style.css') }}">
    <script src="https://kit.fontawesome.com/b20f20a710.js" crossorigin="anonymous"></script>
    <title>MasBroAcademy</title>
</head>

<body>
    @include('sweetalert::alert')
    <nav>
        <div class="nav-content">
            <div id="header-icon">
                <h3>MasBroAcademy</h3>
            </div>
            <ul>
                @if (Route::getCurrentRoute()->uri() == '/')
                    <li id="login">Login</li>
                @elseif (Auth::check() || Auth::guard('admin')->check() || Auth::guard('student')->check())
                    <li><a href="lecturer/dashboard">Dashboard</a></li>
                @else
                    <li><a href="/">Home</a></li>
                @endif
                <li><a href="/courses">Course</a></li>
                @if (Auth::check() || Auth::guard('admin')->check() || Auth::guard('student')->check())
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li><a href="#">Community</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <div class="login pop-up" role="alert">
        <div class="pop-up-container">
            <div id='no-mark'>
                <i class="fa-solid fa-xmark"></i>
            </div>
            <p>Login as...</p>
            <ul class="pop-up-btn">
                <a id="yes-btn" href="/student/login">
                    <li>Student</li>
                </a>
                <a href="/lecturer/login">
                    <li id="no-btn">Lecturer</li>
                </a>
            </ul>
        </div>
    </div>

    <div class="container">
        @yield('main-section')
    </div>

    <footer>
        <div class="footer-content">
            <div id="footer-icon">
                <h3>MasBroAcademy</h3>
            </div>
            <div class="about-us">
                <h4>About Us</h4>
                <ul class="icons">
                    <li><a href=""><i class="fab fa-square-facebook fa-2xl"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-instagram fa-2xl"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    @if (Route::getCurrentRoute()->uri() == '/')
        <script type="module" src="{{ asset('js/login-pop-up.js') }}"></script>
    @endif

</body>

</html>
