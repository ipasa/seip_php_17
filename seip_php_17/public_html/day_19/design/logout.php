<?php
    $home_url='index.php';
    session_start();
    session_destroy();
    header('Location: ' . $home_url);
?>

