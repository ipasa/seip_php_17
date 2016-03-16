<?php

if (isset($_POST['submit'])){
    include 'functions/db_connection.php';
    
    $id             = $_POST['id'];
    $name           = $_POST['name'];
    $product_desc   = $_POST['product_desc'];
    $price          = $_POST['price'];

    include 'functions/crud.php';

    $sql = updateSave($id, $name, $product_desc, $price);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    $message =   'update';
    header('Location: index.php?message='.$message);
}