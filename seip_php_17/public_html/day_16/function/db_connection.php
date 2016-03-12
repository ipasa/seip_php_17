<?php

function db_connection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "seip_17_student_info";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
