<?php

function insertNews($catagory_name, $catagory_desc, $status){
    $sql = "INSERT INTO tbl_catagory (catagory_name, catagory_desc, status)
                VALUES ('$catagory_name', '$catagory_desc', '$status')";

    return $sql;
}

function index(){
    $sql = "SELECT * FROM tbl_catagory";
    return $sql;
}