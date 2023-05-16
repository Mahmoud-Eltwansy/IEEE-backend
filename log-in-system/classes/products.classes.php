<?php

class Products extends Dbh {

    protected function checkProducts($product_name,$username)
    {
        session_start();
        $result=false;
        $stmt=$this->connect()->prepare('SELECT product_name FROM products WHERE username = ? AND product_name = ? ');
        if(!$stmt->execute(array($username,$product_name))){
            $stmt = null;  // delete the stmt
            header("location: ../app.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0){  // Product Exists
            
            $stmt = null;  // delete the stmt
            $_SESSION['creation_error'] = 'Product Exist';
            header("Location: ../create.php"); 
            $result=true;
        }
        else
        {
            // product does not exist
            $result=false;
        }
        return $result;

    }
    protected function setProduct($productName,$price,$username){
        session_start();
        $stmt=$this->connect()->prepare('INSERT INTO products (product_name,price,username) VALUES(?, ?, ?); ');

        // to check if the stmt doesn't failed
        if(!$stmt->execute(array($productName,$price,$username))){
            $stmt = null;  // delete the stmt
            header("location: ../app.php?error=stmtfailed");
            exit();
        }
        $_SESSION['message'] = 'Created Product Successfully';
        $stmt = null;  // delete the stmt
        header("Location: ../create.php"); 
        exit();
    }
    protected function deleteProduct($productName,$username){
        session_start();
        $stmt=$this->connect()->prepare('DELETE FROM products WHERE product_name = ? AND username = ?');

        // to check if the stmt doesn't failed
        if(!$stmt->execute(array($productName,$username))){
            $stmt = null;  // delete the stmt
            header("location: ../app.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0){ // Product Exists  
            $stmt = null;  // delete the stmt
            $_SESSION['deleteMessage0'] = 'Deleted Product Successfully';
            header("Location: ../delete.php"); 
            exit();
        }
        else
        {  // Product Does not Exists
           
            $_SESSION['deleteMessage1'] = 'Product Does not exist';
            header("Location: ../delete.php"); 
            exit();
        }
    }
    protected function updateProduct($product_name,$price,$username)
    {
        session_start();
        $stmt=$this->connect()->prepare('SELECT * FROM products WHERE username = ? AND product_name = ? ');

        // to check if the stmt doesn't failed 
        if(!$stmt->execute(array($username,$product_name))){
            $stmt = null;  // delete the stmt
            header("location: ../app.php?error=stmtfailed");
            exit();
        } 
         
        if ($stmt->rowCount() > 0){  // Product Exists  
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $productName=$user[0]["product_name"];
            
            $stmt = null;        // delete the old stmt
            $updatedStmt=$this->connect()->prepare('UPDATE products SET price = ? WHERE username = ? AND product_name = ? ');
            if(!$updatedStmt->execute(array($price,$username,$product_name))){
                $updatedStmt = null;  // delete the stmt
                header("location: ../app.php?error=stmtfailed");
                exit();
            }
            $updatedStmt = null;  
            $_SESSION['updatedMessage0'] = "Updated ".$productName." successfully and it's new price is ".$price;
            header("Location: ../update.php");
            exit();
        }
        else
        {
            $_SESSION['updatedMessage1']="Product Does Not Exist";
            header("Location: ../update.php");
            exit();
        }    
    }
    protected function getProduct($product_name,$username)
    {
        session_start();
        $stmt=$this->connect()->prepare('SELECT * FROM products WHERE username = ? AND product_name = ? ');

        // to check if the stmt doesn't failed 
        if(!$stmt->execute(array($username,$product_name))){
            $stmt = null;  // delete the stmt
            header("location: ../app.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0){  // Product Exists
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $productName=$user[0]["product_name"];
            $price=$user[0]["price"];    
            $stmt = null;  // delete the stmt
            $_SESSION['getMessage0'] = "You Selected ".$productName." and it's price is ".$price;
            header("Location: ../display.php"); 
            exit();
        }
        else
        {
            $_SESSION['getMessage1']= "Product Does Not Exist";
            header("Location: ../display.php");
            exit();
            
        }
    }
    
}