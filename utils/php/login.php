<?php
if (isset($_POST['submitLogin'])) {
    $nickname = $_POST['email_nick'];
    $password = $_POST['password'];

    require_once "connect.php";
    require_once "functions.php";

    if (emptyInputLogin($nickname, $password) == false) {
        header("Location: ../../pages/login-registration.php?error=emptyinput" . $nickname . $password);
        exit();
    }


    loginUser($conn, $nickname, $password);
} else {
    header("Location: ../../pages/login-registration.php"); // toto je vypis v url prehliadaci
    exit();
}