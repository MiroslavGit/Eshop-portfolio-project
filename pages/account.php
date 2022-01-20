<?php
include("../utils/php/header.php")
?>

<head>
    <link rel="stylesheet" href="../utils/css/login-registration.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../utils/css/account.css?<?php echo time(); ?>">

</head>

<div class="container-fluid login-container p-5">
    <div class="container text-center p-4 bg-light">
        <h1>Hello sir, <?php
                        if (isset($_SESSION['userNickname'])) {
                            echo $_SESSION["userNickname"];
                        }
                        ?></h1>
        <form action="../utils/php/logout.php" method="post">
            <button class="btn btn-none" type="submit">Logout</button>

        </form>
    </div>
</div>


<!-- Order history -->
<div class="container-fluid">
    <div class="row d-flex justify-content-evenly py-5">
        <div class="col-xl-1"></div>
        <div class="col-xl-5 ps-5">
            <h3 class="fw-bold">ORDER HISTORY</h3>
            <p>You haven't placed any orders yet.</p>
        </div>
        <div class="col-xl-5 ps-5">
            <h3 class="fw-bold">ACCOUNT DETAILS</h3>
            <p>
                <?php
                if (isset($_SESSION['userNickname']) && isset($_SESSION['userEmail']) &&  isset($_SESSION['userName'])) {
                    echo "<b>Name:</b>   " . $_SESSION["userName"] . "<br>";
                    echo "<b>Email:</b>   " . $_SESSION["userEmail"] . "<br>";
                    echo "<b>Nickname:</b>   " . $_SESSION["userNickname"];
                }
                ?>
            </p>
        </div>
    </div>
</div>

<!-- Product slider -->
<div class="container">
    <div class="row text-center pt-5 ">
        <h3 class="pb-4 fw-bold">SOME IDEAS FOR YOU</h3>
        <span class="bottom_line"></span>
    </div>
</div>

<div class="container-fluid">
    <div class="carousel slide" id="demo" data-bs-ride="carousel">

        <!--  <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-dark"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-dark"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-dark"></button>
            </div> -->

        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="container mt-5 d-block w-100">
                    <div class="row">
                        <div class="col-md-3 mt-lg-0">
                            <div class="card">
                                <img class="card-img-top p-2" src="../photos/products/product1.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product2.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product3.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product4.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container mt-5 d-block w-100">
                    <div class="row">
                        <div class="col-md-3 mt-lg-0">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product5.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product6.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-2" src="../photos/products/product7.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title">LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-lg-0 mt-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="../photos/products/product8.webp">
                                <div class="card-body">
                                    <h6 class="fw-light">WOMEN'S LONG SLEEVE CREW</h6>
                                    <h4 class="card-title"> LUPINE LIGHTWEIGHT BOTTOMS - WOMEN'S
                                    </h4>
                                    <p class="card-text">12€</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <button class="carousel-control-prev d-flex justify-content-end" id="btnslidone" type="button"
            data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " id="mostslid">
                <i class="fa fa-angle-left "></i>
            </span>
        </button>
        <button class="carousel-control-next d-flex justify-content-start" id="btnslidtwo" type="button"
            data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon " id="mostslid">
                <i class="fa fa-angle-right"></i>
            </span>
        </button>

    </div>

</div>

<?php
include("../utils/php/footer.php")
?>