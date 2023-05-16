<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
    <div class="login-form">
      <h1>Login Form</h1>
      <form action="./includes/login.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username Or Email" required>
        <label for="password">Password:</label>
        <input type="password" id="password0" name="password0" required>
        <button type="submit" name="submit">Login</button>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </form>
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
