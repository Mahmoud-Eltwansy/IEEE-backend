<?php

if(isset($_POST["delete"]))
{
     // Instantiate productContr class
     include '../classes/dbh.classes.php';
     include '../classes/products.classes.php';
     include '../classes/products-contr.classes.php';

    // Grapping the data from the create  form
    $username=$_COOKIE["username"];
    $productName=$_POST["product-name"];
    $price=0;

    $delete= new ProductContr($productName,(int)$price,$username);
    // Running createProduct and create the added product
    $delete->deletionProduct();
}