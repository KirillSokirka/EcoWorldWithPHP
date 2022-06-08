<?php
if (isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["name"])) {
    session_start();
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["authenticated"] = True;
}
header('Location: '."../../index.php");
?>