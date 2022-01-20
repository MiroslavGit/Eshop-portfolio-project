<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS links -->
    <link rel="stylesheet" href="../utils/css/nav.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../utils/css/index.css?<?php echo time(); ?>">


    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>Dakine</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Above nav section -->
        <div class="container-fluid">
            <div class="row p-2 bg-white above-nav ">
                <!-- Colums -->
                <div class="col-lg-1 col-md-4 col-sm-4 col-4 language mt-1 ">
                    <img class="usa-icon" src="../photos/icons/united-states-of-america.png">
                    <span class="usa-title ms-1 ">US</span>
                    <i class="fa fa-sort-down ms-3"></i>
                </div>
                <div class="col-lg-1 icon-col icon-col-1 d-lg-block d-md-none d-sm-none d-none ">
                    <a href="https://www.instagram.com/ten_mirek_/">
                        <i class="fa fa-instagram social-icon "></i>
                    </a>
                    <span class="sivy-oddelovac "></span>
                </div>
                <div class="col-lg-1 icon-col icon-col-2 d-lg-block d-md-none d-sm-none d-none">
                    <a href="https://www.facebook.com/miroslav.hanisko/">
                        <i class="fa fa-facebook social-icon"></i>
                    </a>
                    <span class="sivy-oddelovac  ps-2"></span>
                </div>
                <div class="col-lg-1 icon-col icon-col-2 d-lg-block d-md-none d-sm-none d-none">
                    <a href="https://github.com/MiroslavGit"">
                        <i class=" fa fa-pinterest social-icon"></i>
                    </a>
                </div>
                <div class="col-lg-5 pt-1 d-xl-block d-lg-none d-md-none d-sm-none d-none">
                    <span class="sale-text">25% off Select Surt & Bike! Shop Sale</span>
                </div>
                <div class="col-lg-1 col-md-2 col-2  nav-col first-nav-col">
                    <i class="fa fa-map-marker nav-icon"></i>
                    <span class="nav-text">Stores</span>
                    <span class="sivy-oddelovac-2  ps-2"></span>
                </div>
                <div class="col-lg-1 col-md-2 col-2  nav-col">
                    <i class="fa fa-heart nav-icon"></i>
                    <span class="nav-text">Wishlist</span>
                    <span class="sivy-oddelovac-2  ps-3"></span>
                </div>
                <?php
                if (isset($_SESSION['userNickname'])) {
                    echo '<div class="col-lg-1 col-md-2 col-2 nav-col">';
                    echo '<a href="../pages/account.php">';
                    echo '<i class="fa fa-user-circle nav-icon ps-4"></i>';
                    echo '<span class="nav-text">Account</span>';
                    echo '</a>';
                    echo '<span class="sivy-oddelovac-2  ps-3"></span>';
                    echo '</div>';
                } else {
                    echo '<div class="col-lg-1 col-md-2 col-2 nav-col">';
                    echo '<a href="login-registration.php">';
                    echo '<i class="fa fa-user-circle nav-icon ps-4"></i>';
                    echo '<span class="nav-text">Log in</span>';
                    echo '</a>';
                    echo '<span class="sivy-oddelovac-2  ps-2"></span>';
                    echo '</div>';
                }
                ?>
                <div class="col-lg-1 col-md-2 col-2 nav-col d-flex ms-lg-3 ">
                    <i class="fa fa-shopping-bag nav-icon ps-2"></i>
                    <span class="nav-text ms-4  ps-2">$ 0,00 </span>
                    <i class="fa fa-chevron-right nav-icon d-lg-block d-md-none d-sm-none d-none"
                        style="margin-left: 70px;"></i>
                </div>

            </div>
        </div>



        <!-- Navigation -->
        <div class="navigation-wrap bg-light start-header start-style ">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a href="../index.php">
                        <img class="img-responsive"
                            src="https://cdn.shopify.com/s/files/1/0242/3141/1792/t/217/assets/dklogo.svg?v=13222878580213202190"
                            title="logo">
                    </a>
                    <!-- Togler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto py-3 me-auto mb-2 mb-lg-0 active ">
                            <li class="nav-item active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    MENS
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">WOMENS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SPORT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BACKSPACK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TRAVEL</a>
                            </li>
                            <li class="nav-item">
                                <span class="sivy-oddelovac  d-lg-block d-md-none d-sm-none d-none"></span>
                            </li>
                            <li class=" nav-item">
                                <i class="fa fa-globe nav-icon ms-3" style="margin-right: -15px;"></i>
                                <a class="nav-link" href="#">EXPLORE</a>
                            </li>
                        </ul>
                        <!-- Form -->
                        <form class="d-flex">
                            <div class="containerr ">
                                <input type="text" placeholder="Search...">
                                <div class="search"></div>
                            </div>


                            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn " type="submit"><i class="fa fa-search"></i></button> -->
                        </form>
                    </div>
                </div>
            </nav>

        </div>
    </header>