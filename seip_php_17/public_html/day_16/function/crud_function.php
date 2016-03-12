<?php

function insert_data($name, $email, $phone, $address) {
    $sql = "INSERT INTO student (name, email, phone, address)"
            . "VALUES ('$name', '$email', '$phone', '$address')";
    return $sql;
}

function allStudent() {
    $sql = "SELECT * FROM student";
    return $sql;
}
