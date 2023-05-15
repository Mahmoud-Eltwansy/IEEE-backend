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
        <form action="includes/create.inc.php" method="post">
            <div class="form-group">
                <label for="product-name"><b>Product Name:</b></label>
               
                <input type="text" id="product-name" name="product-name" required>
            </div>
            <div class="form-group">
                <label for="price"><b>Price:</b></label>
               
                <input type="text" id="price" name="price" required>
            </div>
            <div class="form-group">
                <button type="submit" name="create">Create</button>
            <br>
            <br>
            <a href="http://localhost/log-in-system/app.php">Back to main</a>
            </div>
                
            </div>
        </form>
    </div>
    <?php 
        session_start();
        if(isset($_SESSION['creation_error'])) {
          echo "<p id='creation_error' style='color:red; text-align:center;'>" 
          . $_SESSION['creation_error'] . "</p>";
          unset($_SESSION['creation_error']); } 
          // remove the error message from the session
          if(isset($_SESSION['message'])) {
            echo "<p id='message' style='color:green; text-align:center;'>" 
            . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']); }
    ?>
    
</body>
</html>
