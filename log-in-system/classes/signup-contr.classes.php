<?php

class SignupContr extends Signup {
    private $username;
    private $email;
    private $pwd;
    private $pwdRepeat;

    public function __construct($username,$email,$pwd,$pwdRepeat)
    {
        $this->username =$username;
        $this->email =$email;
        $this->pwd =$pwd;
        $this->pwdRepeat =$pwdRepeat;
    }
    public function signupUser()
    {
        session_start(); // start the session
        if($this->invalidUsername() == false)
        {
            // "Invalid Username"
            $_SESSION['error'] = 'Invalid Username';
            header("location: ../signup.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false)
        {
            // "Invalid Email"
            $_SESSION['error'] = 'Invalid Email';
            header("location: ../signup.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false)
        {
            $_SESSION['error'] = 'Password does not match';
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->userTaken() == false)
        {
            // "Username or Email Exist"
            $_SESSION['error'] = 'Username or Email already exists';
            header("location: ../signup.php?error=emailexist");
            exit();
        }
        // If no errors, call the setUser method to insert the user into the database
        $this->setUser($this->username,$this->email,$this->pwd);
     
    }

    private function invalidUsername()
    {
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username))
        {
            return false;
        }
        else
        {
            return true;
        }
             
    }
    
    private function invalidEmail()
    {
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    private function pwdMatch()
    {
        if ($this->pwd !== $this->pwdRepeat) {
            return false;
        }
        else {
            return true;
        }
    }
    private function userTaken()
    {
        if (!$this->checkUser($this->username,$this->email)) {
            return false;
        }
        else {
            return true;
        }
    }
}
