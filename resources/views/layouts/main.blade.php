<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/env-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
    <script src="https://kit.fontawesome.com/b20f20a710.js" crossorigin="anonymous"></script>
    <title>MasBroAcademy</title>
</head>

<body>
    <nav>
        <div class="nav-content">
            <div id="header-icon">
                <h3>MasBroAcademy</h3>
            </div>
            <ul>
                <li><a href="./Home.html">Home</a></li>
                <li><a href="./All_Courses.html">Course</a></li>
                <li><a href="/Community">Community</a></li>
            </ul>
        </div>
    </nav>

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
</body>

</html>
