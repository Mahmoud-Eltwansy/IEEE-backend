<?php

class LoginContr extends Login {
    private $username;
    private $pwd;

    public function __construct($username,$pwd)
    {
        $this->username =$username;
        $this->pwd =$pwd;
    }
    public function loginUser()
    {
        $this->getUser($this->username,$this->pwd);
    }
}