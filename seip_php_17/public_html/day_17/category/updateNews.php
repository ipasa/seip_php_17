<?php

if (isset($_POST['submit'])){
    include 'functions/db_connection.php';
    
    $news_id            = $_POST['news_id'];
    $news_title         = $_POST['news_title'];
    $news_reporter      = $_POST['reporter_name'];
    $news_description   = $_POST['news_description'];
    $news_status        = $_POST['news_publish_status'];

    include 'functions/crud.php';

    $sql = updateSave($news_id, $news_title, $news_reporter, $news_description, $news_status);

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);

    $message =   'update';
    header('Location: index.php?message='.$message);
}