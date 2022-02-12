<?php

// podmienka - ak je tlacidlo submit stlacene vykona sa blok prikazov ktory je v nej

if (isset($_POST['submit'])) {

    // bereme udaje od uzivatela ktore zadal v register formulare a ukladame ich do premennych

    $name = $_POST['name'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // require_oncle znamena ze to pouzijeme iba raz a to prave v tejto podmienke

    require_once "connect.php";
    require_once "functions.php";

    // Error handling 

    // vsetky pouzite funkcie returnu bud true alebo false 

    if (emptyInputSignup($name, $email, $nickname, $password1, $password2) !== false) {
        header("Location: ../../pages/login-registration.php?error=emptyinput");
        exit();
    }

    if (invalidUid($nickname) !== false) {
        header("Location: ../../pages/login-registration.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("Location: ../../pages/login-registration.php?error=invalidEmail");
        exit();
    }

    // hesla sa nezhoduju
    if (pwdMatch($password1, $password2) !== false) {
        header("location: ../../pages/login-registration.php?error=passwordsDontMatch"); // toto je vypis v url prehliadaci
        exit();
    }

    // nickname uz exituje v databaze
    if (uidExist($conn, $nickname, $email) !== false) {
        header("location: ../../pages/login-registration.php?error=nicknameTaken"); // toto je vypis v url prehliadaci
        exit();
    }

    createUser($conn, $name, $email, $nickname, $password1);
} else {
    header("Location: ../../pages/login-registration.php");
    exit();
}