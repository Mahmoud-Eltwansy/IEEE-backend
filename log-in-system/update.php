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
        <form action="includes/update.inc.php" method="post">
            <div class="form-group">
                <label for="product-name"><b>Product Name:</b></label>
               
                <input type="text" id="product-name" name="product-name" required>
            </div>
            <div class="form-group">
                <label for="price"><b>New Price:</b></label>
               
                <input type="text" id="new_price" name="new_price" required>
            </div>
            <div class="form-group">
                <button type="submit" name="update">Update</button>
            <br>
            <br>
            <a href="http://localhost/log-in-system/app.php">Back to main</a>
            </div>
                
            </div>
        </form>
    </div>
    <?php 
        session_start();
        if(isset($_SESSION['updatedMessage0'])) {
          echo "<p id='updatedMessage0' style='color:green; text-align:center;'>" 
          . $_SESSION['updatedMessage0'] . "</p>";
          unset($_SESSION['updatedMessage0']); } 
          // remove the error message from the session
          if(isset($_SESSION['updatedMessage1'])) {
            echo "<p id='updatedMessage1' style='color:red; text-align:center;'>" 
            . $_SESSION['updatedMessage1'] . "</p>";
            unset($_SESSION['updatedMessage1']); }
    ?>
    
</body>
</html>
