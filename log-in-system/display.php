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
        <form action="includes/display.inc.php" method="post">
            <div class="form-group">
                <label for="product-name"><b>Product Name:</b></label>
               
                <input type="text" id="product-name" name="product-name" required>
            </div>
            <div class="form-group">
                <button type="submit" name="display">Get Product</button>
            <br>
            <br>
            <a href="http://localhost/log-in-system/app.php">Back to main</a>
            </div>
                
            </div>
        </form>
    </div>
    <?php 
        session_start();
        if(isset($_SESSION['getMessage0'])) {
          echo "<p id='getMessage0' style='color:green; text-align:center;'>" 
          . $_SESSION['getMessage0'] . "</p>";
          unset($_SESSION['getMessage0']); } 
          // remove the error message from the session
          if(isset($_SESSION['getMessage1'])) {
            echo "<p id='getMessage1' style='color:red; text-align:center;'>" 
            . $_SESSION['getMessage1'] . "</p>";
            unset($_SESSION['getMessage1']); }
    ?>
    
</body>
</html>
