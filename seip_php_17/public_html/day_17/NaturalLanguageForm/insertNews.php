<?php

if (isset($_POST['submit'])) {
    include 'functions/db_connection.php';

    $catagory_name  = $_POST['catagory_name'];
    $catagory_desc  = $_POST['catagory_desc'];
    $status         = $_POST['status'];

    include 'functions/crud.php';

    $sql = insertNews($catagory_name, $catagory_desc, $status);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    $message = 'success';
    header('Location: index.php?message=' . $message);
}