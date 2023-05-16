

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign-up Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="signup-form">
      <h1>Sign-up Form</h1>
      <form action="./includes/signup.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password0" required>
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <button type="submit" name="submit">Sign up</button>
        </form>
      <p>Already have an account? <a href="http://localhost/log-in-system/index.php">Login</a></p>
    </div>
    <?php
      session_start();
      if(isset($_SESSION['error'])) {
        echo "<p id='error' style='color:red; text-align:center;'>" 
        . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']); // remove the error message from the session
}
?>

    
      
  </body>
</html>
