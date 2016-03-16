<?php

function insertNews($name, $product_desc, $price){
    $product_desc= mysql_real_escape_string($product_desc);
    $sql = "INSERT INTO tbl_product (name, product_desc, price)
                VALUES ('$name', '$product_desc', '$price')";
    return $sql;
}

function index(){
    $sql = "SELECT * FROM tbl_product WHERE deletion_statuS=0";
    return $sql;
}

function update($proID){
    $sql = "SELECT * FROM tbl_product WHERE id=$proID";
    return $sql;
}

function updateSave($id, $name, $product_desc, $price){
    $product_desc= mysql_real_escape_string($product_desc);
    $sql = "UPDATE tbl_product SET name='$name', "
            . "product_desc='$product_desc', "
            . "price='$price' "
            . "WHERE id=$id";
    return $sql;
}
function delete($id){
    // sql to delete a record
    //$sql = "DELETE FROM tbl_product WHERE id=$id";
    $sql = "UPDATE tbl_product SET deletion_status=1 WHERE id=$id";
    return $sql;
}
