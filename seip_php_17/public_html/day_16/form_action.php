<?php

if (isset($_POST['submit'])) {
    
    include './function/db_connection.php';
    include './function/crud_function.php';
    
    $conn       = db_connection();
    
    $name       = $_POST['student_name'];
    $email      = $_POST['student_email'];
    $phone      = $_POST['student_phone'];
    $address    = $_POST['student_address'];

    $sql = insert_data($name, $email, $phone, $address);

    if ($conn->query($sql) === TRUE) {
        $message='add_student.php?message=success';
        header('Location:'.$message);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

