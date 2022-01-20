<?php
$serverName = "localhost";
$username = 'root';
$password = '';
$dbname = "my_eshop";


/* Create conection */
$conn = mysqli_connect($serverName, $username, $password, $dbname);

/* Check conection */
if (!$conn) {
    die('Could not Connect My Sql:');
}