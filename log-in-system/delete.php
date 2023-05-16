<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" href="styles.app.css">
</head>
<body>
    <div class="header">
        <img src="logo/logo.jpg" alt="Logo">
        <form action="includes/signout.inc.php" method="post">
            <button type="submit" name="sign-out">Sign Out</button>
        </form>
    </div>
    <div class="create-form">
        <form action="includes/delete.inc.php" method="post">
            <div class="form-group">
                <label for="product-name"><b>Product Name:</b></label>        
                <input type="text" id="product-name" name="product-name" required>
            </div>
            
            <div class="form-group">
                <button type="submit" name="delete">Delete</button>
            <br>
            <br>
            <a href="http://localhost/log-in-system/app.php">Back to main</a>
            </div>
                
            </div>
        </form>
    </div>
    <?php 
        session_start();
        if(isset($_SESSION['deleteMessage0'])) {
          echo "<p id='deleteMessage0' style='color:green; text-align:center;'>" 
          . $_SESSION['deleteMessage0'] . "</p>";
          unset($_SESSION['deleteMessage0']); } 
          // remove the error message from the session
          if(isset($_SESSION['deleteMessage1'])) {
            echo "<p id='deleteMessage1' style='color:red; text-align:center;'>" 
            . $_SESSION['deleteMessage1'] . "</p>";
            unset($_SESSION['deleteMessage1']); }
    ?>
    
</body>
</html>
