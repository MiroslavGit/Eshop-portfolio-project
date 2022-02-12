<?php
$serverName = "localhost";
$username = 'root';
$dBpassword = '';
$dbname = "my_eshop";

/* $serverName = "sql105.epizy.com";
$username = 'epiz_30843577';
$dBpassword = 'jtc74TMcuJs6z1';
$dbname = "epiz_30843577_my_eshop"; */


/* Create conection */
$conn = mysqli_connect($serverName, $username, $dBpassword, $dbname);

/* Check conection */
if (!$conn) {
    die('Could not Connect My Sql:');
}