<?php

if(isset($_POST["update"]))
{
     // Instantiate productContr class
     include '../classes/dbh.classes.php';
     include '../classes/products.classes.php';
     include '../classes/products-contr.classes.php';

    // Grapping the data from the create  form
    $username=$_COOKIE["username"];
    $productName=$_POST["product-name"];
    $newPrice=$_POST["new_price"];


    $update= new ProductContr($productName,(int)$newPrice,$username);

    // Running createProduct and create the added product
    $update->updatedProduct();
}
    