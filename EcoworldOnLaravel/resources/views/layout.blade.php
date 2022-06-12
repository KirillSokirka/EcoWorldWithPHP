<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EcoWorld</title>
    <!DOCTYPE html>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <script type="text/javascript" src="../node_modules/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="index.php"><img alt="Logo"></a>
    </div>
    <div class="menu">
        @auth
        <div class="authorized">
            <div class="header">
                <a href="#" aria-haspopup="true">Вітаю</a>
                <img alt="Arrow" id="arrows">
            </div>
            <div class="content">
                <ul class="dropdown" aria-label="submenu">
                    <li><a href="src/html/create-announcment.html">Створити оголошення</a></li>
                    <hr>
                    <li><a href="#">Мої оголошення</a></li>
                    <li><a href="#">Вподобані оголошення</a></li>
                    <hr>
                    <li><a href="backend/auth/exit.php">Вихід</a></li>
                </ul>
            </div>
        </div>
        @elseguest
            <div class="not-authorized">
                <a type='button' id="signIn-btn">Sign In</a>
                <a type='button' id="signUp-btn">Sign Up</a>
            </div>

            <?php
            require ('../resources/views/auth-modals.php')
            ?>
        @endauth
    </div>
    <div class="mobile-menu">
        <a href="{{url('/home/mobile')}}">
            <img class="menu-button" alt="Menu">
        </a>
    </div>
</header>
<main class="main">
@yield('container')
</main>
<footer class="footer">
    <div>
        <p>Зворотній зв'язок:</p>
        <p class="lower-text">email: ecoworld@gmail.com</p>
    </div>
    <div>EcoWorld 2022</div>
</footer>
<script type="text/javascript" src={{ asset('../resources/css/style.css') }}></script>
</body>
</html>
