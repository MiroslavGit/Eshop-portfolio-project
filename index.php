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
    <link rel="stylesheet" href="utils/css/nav.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="utils/css/index.css?<?php echo time(); ?>">


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
                    <img class="usa-icon" src="photos/icons/united-states-of-america.png">
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
                    echo '<a href="pages/account.php">';
                    echo '<i class="fa fa-user-circle nav-icon ps-4"></i>';
                    echo '<span class="nav-text ">Account</span>';
                    echo '</a>';
                    echo '<span class="sivy-oddelovac-2  ps-3"></span>';
                    echo '</div>';
                } else {
                    echo '<div class="col-lg-1 col-md-2 col-2 nav-col">';
                    echo '<a href="pages/login-registration.php">';
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
                    <a href="index.php">
                        <img class="img-responsive"
                            src="https://cdn.shopify.com/s/files/1/0242/3141/1792/t/217/assets/dklogo.svg?v=13222878580213202190"
                            title="logo" alt="title">
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
                                <a class="nav-link dropdown-toggle" href="pages/collection/mens.php"
                                    id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-haspopup="true">
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
                                <a class="nav-link" href="pages/mens.php">WOMENS</a>
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

    <!-- Title img  -->
    <div class="container_fluid mt-5 ">
        <div class="row">
            <div class="first-big-photo">
                <a href="shop.php">
                    <img src="photos/images/big-image.jpg" class="img-fluid" alt="title-img">
                </a>
            </div>
        </div>
    </div>

    <!-- Product slider -->
    <div class="container">
        <div class="row text-center pt-5 ">
            <h3 class="pb-4 fw-bold">CUSTOMER FAVORITES</h3>
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
                                    <img class="card-img-top p-2" src="photos/products/product1.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product2.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product3.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product4.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product5.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product6.webp">
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
                                    <img class="card-img-top p-2" src="photos/products/product7.webp">
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
                                    <img class="card-img-top p-1" src="photos/products/product8.webp">
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

    <!-- Another img  -->
    <div class="container_fluid mt-5">
        <div class="row">
            <div class="second-big-photo">
                <a href="shop.php">
                    <img src="photos/images/big-image2.webp" class="img-fluid" alt="title-img">
                </a>
            </div>
        </div>
    </div>

    <!-- 2 Images  -->
    <div class="container_fluid">
        <div class="row p-4">
            <div class="col-xl-6 images-2">
                <img src="photos/images/big-image3.webp" class="img-fluid" alt="title-img">
            </div>
            <div class="col-xl-6 images-2">
                <img src="photos/images/big-image4.webp" class="img-fluid" alt="title-img">

            </div>
        </div>
    </div>

    <!-- 3 Images -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-4 p-2 px-3">
                <img src="photos/images/triple-images-1.webp" class="img-fluid" alt="title-img">
                <h5 class="text-muted pt-3">MEN'S</h5>
                <h3 class="fw-bolder ">MITTS & GLOVES</h3>
            </div>
            <div class="col-4 p-2 px-3">
                <img src="photos/images/triple-images-3.webp" class="img-fluid" alt="title-img">
                <h5 class="text-muted pt-3">WOMEN'S</h5>
                <h3 class="fw-bolder ">MITTS & GLOVES</h3>
            </div>
            <div class="col-4 p-2 px-3">
                <img src="photos/images/triple-images-2.webp" class="img-fluid" alt="title-img">
                <h5 class="text-muted pt-3">KIDS</h5>
                <h3 class="fw-bolder ">MITTS & GLOVES</h3>
            </div>
        </div>
    </div>

    <!-- Video -->

    <div class="container-fluid">
        <!-- Button trigger modal -->

        <div class="row">
            <div class="col-12 text-center">
                <img src="photos/images/video-img.webp" class="img-fluid" alt="title-img">

                <button type="button" class="btn video-btn" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-bs-target="#myModal">
                    <i class="fa fa-play-circle"></i>
                </button>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">


                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white">
        <div class="dark-color">
            <!-- Grid container -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-12 col-md-6 col-xl-4 mb-5">
                        <h5 class="text-uppercase">DISCOVER DAKINE</h5>

                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <a href="#!" class="text-white ">Sustainability</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Inside Dakine</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Dakine Team</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Contact</a>
                            </li>
                        </ul>
                    </div>


                    <!--Grid column-->
                    <div class="col-xl-4 col-12 col-md-6 mb-5">
                        <h5 class="text-uppercase">CUSTOMER HELP
                        </h5>

                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <a href="#!" class="text-white">1-573-303-3100</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Shipping</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Wishlist</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Returns</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Warranty</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Track Your Order</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">FAQs</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Gift Card</a>
                            </li>
                        </ul>
                    </div>


                    <!--Grid column-->
                    <div class="col-xl-4 col-12 col-md-6 mb-5">
                        <h5 class="text-uppercase mb-0">MORE INFO
                        </h5>

                        <ul class="list-unstyled ">
                            <li class="py-2">
                                <a href="#!" class="text-white">Terms of Use</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Privacy Policy</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Online Dealers</a>
                            </li>
                            <li class="py-2">
                                <a href="#!" class="text-white">Pro Signup</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--Grid row-->
                <div class="row ">
                    <div class="col-xl-8">
                        <h5 class="fw-bold">JOIN OUR MAILING LIST</h5>
                        <h3 class="fw-lighter">EXCLUSIVE OFFERS, NEW PRODUCTS, AND MEMBERS-ONLY CONTENT</h3>
                        <form action="index.php" method="post">
                            <div class="input-group mb-4 mt-4">
                                <input type="text" class="form-control" placeholder="Email adress"
                                    aria-describedby="basic-addon2" required>
                                <button class="btn btn-light" type="submit">Sign Me Up</button>
                            </div>
                        </form>
                        <div class="d-flex pb-5 pt-3">
                            <a href="https://www.facebook.com/miroslav.hanisko/">
                                <i class="fa fa-facebook social-icon-footer "></i>
                            </a>
                            <a href="https://github.com/MiroslavGit">
                                <i class="fa fa-pinterest social-icon-footer "></i>
                            </a>
                            <a href="https://www.instagram.com/ten_mirek_/">
                                <i class="fa fa-instagram social-icon-footer "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row bg-dark ">
            <div class="col-xl-2"></div>
            <div class="col-lg-9 pt-3 d-flex copyright">
                © 2022,
                <a class="text-white pe-5 ps-1" href="index.php">Dakine</a>
                <p>Dakine IP Holdings LP. All Rights Reserved.</p>
            </div>
        </div>

        <!-- Back to top button -->
        <a id="button"> </a>

    </footer>


    <!-- BS links -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- jquery -->
    <script src="utils/js/jquery-3.6.0.js"></script>

    <!-- Custom script links -->
    <script src="utils/js/script.js?<?php echo time(); ?>"></script>

</body>

</html>