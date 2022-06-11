<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EcoWorld</title>
    <!DOCTYPE html>
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<div class="mobile-menu-page-wrapper">
    <div class="mobile-menu-page">
        <div class="links-area">
            @auth
                <a type='button' class="link">Створити</a>
                <a type='button' class="link">Вподобані</a>
                <a type='button' href="backend/auth/exit.php" class="link">Вийти</a>
            @elseguest
                <a type='button' class="link" id="signIn-btn">Увійти</a>
                <a type='button' class="link" id="signUp-btn">Зареєструватися</a>
            @endauth
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="../../resources/js/auth.js"></script>
</html>

