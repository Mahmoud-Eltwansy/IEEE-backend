<?php

if(isset($_POST["submit"]))
{
    // Grapping the data from the login form
    $username=$_POST["username"];
    $pwd=$_POST["password0"];

    // Instantiate SignupContr class
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';

    $login= new LoginContr($username,$pwd);

    // Running error handlers and signup the user
    $login->loginUser();

    header("location: ../app.php?error=none");


}
?>
  
  
    

    
        
            

    <!-- // Going to App page
    header("location: ../index.php?error=none"); -->



