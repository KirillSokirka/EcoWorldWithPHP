<?php
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        session_start();
        $_SESSION["authenticated"] = False;
        if (isset($_SESSION["login"]) && isset($_SESSION["password"])) {
            if ($_SESSION["login"] == $_POST["login"]
                && $_SESSION["password"] == $_POST["password"]) {
                $_SESSION["authenticated"] = True;
            }
        }
    }
    header('Location: '."../../index.php");
?>