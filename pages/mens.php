<?php
include("../utils/php/header.php")
?>

<head>
    <link rel="stylesheet" href="../utils/css/mens.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../utils/css/mens.css?<?php echo time(); ?>">

</head>
<!-- Mens Shop -->
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-xl-4 bg-warning p-5 ">
            <h3>MENS</h3>
            <h6>Sort</h6>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Adjust Sorting
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Featured</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-8 bg-dark p-5 ">Ahoj</div>
    </div>
</div>

<?php
include("../utils/php/footer.php")
?>