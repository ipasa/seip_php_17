<?php
/**
 * Created by PhpStorm.
 * User: pasha
 * Date: 3/14/2016
 * Time: 12:48 AM
 */

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_product_price";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
