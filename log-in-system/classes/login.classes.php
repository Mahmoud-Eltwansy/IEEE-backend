<?php 

class Login extends Dbh {

    protected function getUser($username,$pwd){
        $stmt=$this->connect()->prepare('SELECT password FROM clients WHERE username = ? OR email = ?; ');

        session_start();

        if(!$stmt->execute(array($username,$username))){
            $stmt = null;  // delete the stmt
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($loginData) == 0){
            $stmt=null;
            $_SESSION['error'] = 'User Not Found';
            header("location: ../index.php?error=Usernotfound");
            exit();
        }
        $checkPwd= password_verify($pwd,$loginData[0]["password"]);
        if($checkPwd == false){
            $stmt=null;
            $_SESSION['error'] = 'Wrong Password';
            header("location: ../index.php?error=Wrongpassword");
            exit();
        }
        elseif ($checkPwd == true){
            $stmt=$this->connect()->prepare('SELECT * FROM clients WHERE username = ? OR email = ? AND password = ?; ');
            if(!$stmt->execute(array($username,$username,$pwd))){
                $stmt = null;  // delete the stmt
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if(count($loginData) == 0){
                $stmt=null;
                $_SESSION['error'] = 'User Not Found';
                header("location: ../index.php?error=Usernotfound");
                exit();
            }
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);

            setcookie("username", $user[0]["username"],false,"/");
            setcookie("id", $user[0]["id"],false,"/");

        }
        
        $stmt=null;

        

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
            $result = false;
        }        
        else
        {
            $result = true;
  
        }
            return $result;
    }
}
