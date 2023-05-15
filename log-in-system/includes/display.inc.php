<?php

if(isset($_POST["display"]))
{
     // Instantiate productContr class
     include '../classes/dbh.classes.php';
     include '../classes/products.classes.php';
     include '../classes/products-contr.classes.php';

    // Grapping the data from the create  form
    $username=$_COOKIE["username"];
    $productName=$_POST["product-name"];
    $price=0;

    $getProd= new ProductContr($productName,(int)$price,$username);
    // Running createProduct and create the added product
    $getProd->gettingProduct();
}