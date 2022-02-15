<?php
include("../utils/php/header.php")
?>

<head>
    <link rel="stylesheet" href="../utils/css/login-registration.css?<?php echo time(); ?>">
    <script refer src="../utils/js/showErorModal.js?<?php echo time(); ?>"></script>
</head>

<div class="container-fluid login-container">
    <div class="row justify-content-center justify-content-evenly">
        <div class="col-lg-4 bg-light m-5 p-5">
            <h2 class="text-center fw-bold">LOGIN</h2>
            <form action="../utils/php/login.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email / Nickname</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email_nick">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlTextarea1"
                        name="password"></input>
                </div>
                <a href="" class="text-center">
                    <p>Forgot your password?</p>
                </a>
                <div class="text-center">
                    <button class="btn btn-warning fw-light px-3 py-2" type="submit" name="submitLogin">SIGN IN
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 bg-light m-5 p-5">
            <h2 class="text-center fw-bold">CREATE ACCOUNT</h2>
            <form action="../utils/php/signup.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email
                    </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nickname
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nickname">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlTextarea1" name="password1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleFormControlTextarea1" name="password2">
                </div>

                <div class="text-center">
                    <button class="btn btn-warning fw-light px-3 py-2" type="submit" name="submit">CREATE </button>
                </div>
            </form>
        </div>

        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyinput") {
                echo '<script type="text/javascript">showErorModal("Empty Input !");</script>';
            } else if ($_GET['error'] == "invalidUid") {
                echo '<script type="text/javascript">showErorModal("Invalid Username !");</script>';
            } else if ($_GET['error'] == "invalidEmail") {
                echo '<script type="text/javascript">showErorModal("Invalid Email !");</script>';
            } else if ($_GET['error'] == "passwordsDontMatch") {
                echo '<script type="text/javascript">showErorModal("Password do not match !");</script>';
            } else if ($_GET['error'] == "nicknameTaken") {
                echo '<script type="text/javascript">showErorModal("Username or Email Taken !");</script>';
            } else if ($_GET['error'] == "stmtFailed") {
                echo '<script type="text/javascript">showErorModal("Invladit Input !");</script>';
            } else if ($_GET['error'] == "signUpSuccesful") {
                echo '<script type="text/javascript">showErorModal("SignUp Succesful !");</script>';
            } else if ($_GET['error'] == "wrongpwd") {
                echo '<script type="text/javascript">showErorModal("Wrong Password !");</script>';
            } else if ($_GET['error'] == "wrongnick") {
                echo '<script type="text/javascript">showErorModal("Wrong Nick !");</script>';
            }
        }

        ?>

    </div>
</div>

<?php
include("../utils/php/footer.php")
?>