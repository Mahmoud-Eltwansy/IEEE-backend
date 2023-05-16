<?php

if(isset($_POST["submit"]))
{
    // Grapping the data from the sign up form
    $username=$_POST["username"];
    $email=$_POST["email"];
    $pwd=$_POST["password0"];
    $pwdRepeat=$_POST["confirm-password"];
    $errors = array();


    // Instantiate SignupContr class
    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup-contr.classes.php';

    $signup= new SignupContr($username,$email,$pwd,$pwdRepeat);

    // Running error handlers and signup the user
    $signup->signupUser();


 

     // Going to App page
    header("location: ../app.php?error=none"); 

}
    