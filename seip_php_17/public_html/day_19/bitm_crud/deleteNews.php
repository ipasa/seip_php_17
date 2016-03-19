<?php
    include 'functions/db_connection.php';
    
    $news_id    = $_GET['newsID'];

    include 'functions/crud.php';

    $sql = delete($news_id);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    $message =   'Delete';
    header('Location: index.php?message='.$message);