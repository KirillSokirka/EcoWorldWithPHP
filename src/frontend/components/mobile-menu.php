<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../css/mobile-menu-page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
</head>

<body>
<?php
session_start();
if ($_SESSION["authenticated"]) {
    require ('mobile-authorized-menu.php');
} else {
    require ('mobile-not-authorized-menu.php');
}
?>
</body>
</html>
