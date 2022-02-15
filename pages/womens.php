<?php
include("../utils/php/header.php")
?>

<head>
    <link rel="stylesheet" href="../utils/css/womens.css?<?php echo time(); ?>">
</head>
<!-- Mens Shop -->
<div class="container mt-5">
    <div class="row mt-5 pt-5">
        <div class="col-xl-4 bg-white p-5 ">

            <div class="col-lg-12 mx-auto">
                <div class="row">
                    <div class="">
                        <h4 class="pb-3"><strong>WOMENS</strong></h4>
                        <p class="pt-2"><strong>Sort</strong></p>

                        <label class="dropdown">

                            <div class="dd-button">
                                Adjust Sorting
                            </div>

                            <input type="checkbox" class="dd-input" id="test">

                            <ul class="dd-menu">
                                <li>Feautured</li>
                                <li>Best Selling</li>
                            </ul>

                        </label>

                        <p class="pt-2"><strong>Women's Categories</strong></p>
                        <ul class="categories">
                            <li>T-Shirts</li>
                            <li>Bike Sports</li>
                            <li>Socks</li>
                        </ul>

                        <p class="pt-2"><strong>Filter</strong></p>

                        <div class="parent">
                            <div class="child">Gender</div>
                            <div class="child-dropdown">
                                <input type="checkbox" id="mens">
                                <label for="mens">MENS</label><br>
                                <input type="checkbox" id="womens">
                                <label for="womens">WOMENS</label><br>
                                <input type="checkbox" id="unisex">
                                <label for="unisex">UNISEX</label><br>
                                <input type="checkbox" id="kids">
                                <label for="kids">KIDS</label>
                            </div>
                            <div class="child">Price</div>
                            <div class="child-dropdown">
                                <p>€ 0 - 50</p>
                                <p>€ 50 - 100</p>
                                <p>€ 100 - 150</p>
                                <p>€ 200 - 250</p>
                                <p>€ 250 - 300</p>
                                <p>€ 300 - ABOVE</p>
                            </div>
                            <div class="child">Color</div>
                            <div class="child-dropdown">
                                <div class="colors">
                                    <span class="color" id="black"></span>
                                    <span class="color" id="white"></span>
                                    <span class="color" id="pink"></span>
                                    <span class="color" id="grey"></span>
                                    <span class="color" id="blue"></span>
                                    <span class="color" id="green"></span>
                                </div>
                            </div>
                            <div class="child">Sport</div>
                            <div class="child-dropdown">
                                <p>BIKE</p>
                                <p>SNOW</p>
                                <p>SURF</p>
                            </div>
                            <div class="child">Thickness</div>
                            <div class="child-dropdown">
                                <p>2/2 MM</p>
                                <p>3/2 MM</p>
                                <p>4/3 MM</p>
                                <p>5/4/3 MM</p>
                            </div>
                            <div class="child">Temperature Rating</div>
                            <div class="child-dropdown">
                                <p>-10F AND BELOW</p>
                                <p>-10F TO 20F</p>
                                <p>20F AND ABOVE</p>
                            </div>
                            <div class="child">Wamth Rating</div>
                            <div class="child-dropdown">
                                <p>WARM</p>
                                <p>WARMER</p>
                                <p>WARMEST</p>
                            </div>
                            <div class="child">Volume Range</div>
                            <div class="child-dropdown">
                                <p>SMALL (UP TO 21L)</p>
                                <p>MEDIUM (UP TO 31L)</p>
                                <p>LARGE (32L AND UP)</p>
                            </div>
                        </div>





                        <div id="brand_filter" class="overflow-auto mb-3" style="height:1px; ">
                        </div>
                        <button type="button" name="clear_filter" class="btn btn-warning btn-sm form-control mb-2"
                            id="clear_filter" style="border: solid 1px grey;">Clear Filter</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-8 bg-dark p-5 ">
            <div id="product_area"></div>

            <div id="skeleton_area"></div>

            <div id="pagination_area" class="mt-2 mb-5"></div>
        </div>
    </div>

    <script src="../utils/js/jquery-3.6.0.js"></script>
    <script src="../utils/js/filter_product.js"></script>
</div>

<?php
include("../utils/php/footer.php")
?>