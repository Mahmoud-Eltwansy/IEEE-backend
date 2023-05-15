<?php 

class Signup extends Dbh {

    protected function setUser($username,$email,$pwd){
        $stmt=$this->connect()->prepare('INSERT INTO clients (username,email,password) VALUES(?, ?, ?); ');

        $hashedPwd= password_hash($pwd,PASSWORD_DEFAULT);
        if(!$stmt->execute(array($username,$email,$hashedPwd))){
            $stmt = null;  // delete the stmt
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;  // delete the stmt


    }
    protected function checkUser ($username,$email)
    {
        $stmt=$this->connect()->prepare('SELECT username FROM clients WHERE username = ? OR email = ?;');
        
        if(!$stmt->execute(array($username,$email))){
            $stmt = null;  // delete the stmt
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $result=""; 
        if($stmt->rowCount()>0)
        {
            $result=false;
        }
        else
        {
            $result=true;
        }
        return $result;
        
    }
}
