<?php

//funkcia ktora kontroluje či sú všetky polia pri registrácií vyplnené, či nie su prázdne

function emptyInputSignup($name, $email, $nickname, $password1, $password2)
{
    $result;  // premenna ktora je true alebo false
    if (empty($name) || empty($email) || empty($nickname) || empty($password1) || empty($password2)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// funkia ktora kontroluje ci je uzivatelom zadany nickName v korektnom tvare a ci neobsahuje neziaduce znaky

function invalidUid($nickname)
{
    $result; // premenna ktora je true alebo false 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $nickname)) { // preg_match vrati ci sa v retazci nasla zhoda s tym co zadal uzivatel 
        // tu sa dostaneme ak uzivatel zada do svojho nickname nieco ine ako pismena od a-z alebo A-Z alebo cisel 0-9
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

//funkcia ktora kontroluje či je email zadaný správne

function invalidEmail($email)
{
    $result;  // premenna ktora je true alebo false
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}



// funkcia ktora kontroluje ci sa hesla zhoduju

function pwdMatch($password1, $password2)
{
    $result;
    if ($password1 == $password2) {
        $result = false; // ak sa returne true - to znamena ze to je error
    } else {
        $result = true;
    }

    return $result;
}



// funkcia ktora kontroluje ci uz zadany nickname existuje v databaze

function uidExist($conn, $nickname, $email)
{
    // tento sql kod znamena ze selectni vsetko z tabulky users kde nickname sa rovna ? - otaznik znamena text zadany uzivatelom - porovnava zadany text s textom v databaze 
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); // inicializujeme prepare statement, ktory sa pouziva proti tomu aby uzivatel nezadal do input field nejaky sql kod ktory by nam mohol znicit databazu/vymazat zaznamy
    // $sql tam pridavame preto, pretoze ten sql kod sa vykona este predtym ako uzivatel zacne zadavat input (meno, priezvisko...) a to je ochrana pred tym aby uzivatel zadal nejaky neziaduci kod do input field

    // v tejto podmienke kontrolujeme ci nastali nejake chyby
    if (!mysqli_stmt_prepare($stmt, $sql)) { // podmienka znamena - spusti sql kod ktory je v premennej SQL a vypis vsetky chyby ktore nastali, pretoze najprv kontrolujeme chyby pomocou ! na zaciatku
        header("location: ../../pages/login-registration.php?error=stmtFailed"); // toto je vypis v url prehliadaci
        exit();
        // v tejto casti podmienky sa robi to: ak nastala nejaka chyba, tak vrati to uzivatela na stranku signup_page s errorom v url 
    }

    mysqli_stmt_bind_param($stmt, "ss", $nickname, $email); // "ss" ako druhy parameter znamena 2krat string (s ako string) a dvakrat preto pretoze chceme zobrat z databazy nickName a email ktore su obidva typu string
    mysqli_stmt_execute($stmt); // tato metoda bere data z databazy ak sa v nej nachadzaju, pretoze sme vo funkcii ktora kontroluje ci uzivatel uz existuje

    $resultData = mysqli_stmt_get_result($stmt); // tu do premennej resultData bereme vsetky data ktore sa nasli v konkretnej databaze pod konkretnym dopytom a ukladam ich v nej (premennej)

    // tato podmienka vyvolava data z databazy ktore uklada do associative arrayu 
    // v skratke znamena - ak mam nejake data v databaze, tak returne to true, ak nie tak false 
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row; // returnujem data z databazy ak tam uzivatel existuje   
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt); // zatvarame statement

}


// tato funkcia vytvara uzivatela ak v databaze este neexistuje

function createUser($conn, $name, $email, $nickname, $password1)
{
    // v sql premennej insertujeme data o uzivatelovi do tabulky users 

    $sql = "INSERT INTO `users`(`usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES (?, ?, ?, ?);"; // otazniky znamenaju values ktore zadal uzivatel pri vyplnani formularu
    // novy prepared statement s connection do databazy 
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../pages/login-registration.php?error=smtpFailed");
        exit();
    }

    // hashed password sa pouziva pre zasifrovanie hesla - aby nebolo jednoduche zistit hesla prihlasenych uzivatelov

    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $nickname, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../../pages/login-registration.php?error=signUpSuccesful");
    exit();
}


// tato funkcia prihlasuje užívateľa ak uživatel existuje

function loginUser($conn, $nickname, $password)
{

    $uidExist = uidExist($conn, $nickname, $nickname);

    if ($uidExist == false) {
        header("Location: ../../pages/login-registration.php?error=wrongnick");
        exit();
    }

    // uidExist je associative array a v [] je nazov stlpca z ktoreho chceme brat data 
    $passwordHashed = $uidExist["usersPwd"];

    // password_verify je build-in funkcia ktora z hashnuteho hesla skontroluje ci sa zhoduje s tym ktore bolo zadane predtym - ako keby ho "odtaji" xd
    $checkPassword = password_verify($password, $passwordHashed);

    // podmienka - ak sa heslo zadane uzivatelom nezhoduje s heslom v databaze tak to returne false
    if ($checkPassword == false) {
        header("Location: ../../pages/login-registration.php?error=wrongpwd");
        exit();
    } elseif ($checkPassword == true) {
        // session znamena, ze ten uzivatel bude prihlaseny aj ked sa bude preklikavat na inych podstrankach
        session_start();
        // v [] pri _SESSION zadavame nazov super globalnej premennej ktoru mozeme pouzit potom na hocijakej stranke - ak chceme ziskat pristup k id uzivatela alebo nickname uzivatela z databazy
        $_SESSION["userId"] =  $uidExist["usersID"];
        $_SESSION["userNickname"] = $uidExist["usersUid"];
        $_SESSION["userEmail"] = $uidExist["usersEmail"];
        $_SESSION["userName"] = $uidExist["usersName"];

        header("Location: ../../index.php");
        exit();
    }
}