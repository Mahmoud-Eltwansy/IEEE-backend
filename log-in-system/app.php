<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet"  href="styles.app.css">

</head>
<body>
    <div class="header">
      <img src="logo/logo.jpg" alt="Logo">
      <form action="includes/signout.inc.php" method="post">
        <button type="submit" name="sign-out" >Sign Out</button>
      </form>
    </div>
  <div class= "center">
      <div class= "welcomingMessage"></div>
      <?php session_start(); ?>
      <h1>Welcome, <?php echo $_COOKIE['username']; ?></h1>
      </div>
    <div class="app-form">
      <form action="create.php" method="post">
        <button type="submit" name="createProduct" >Create a Product</button>
      </form>
      <form action="delete.php" method="post">
        <button type="submit" name="deleteProduct" >Delete a Product</button>
      </form>
      <form action="update.php" method="post">
        <button type="submit" name="updateProduct" >Update a Product</button>
      </form>
      <form action="display.php" method="post">
        <button type="submit" name="display" >Get a Product</button>
      </form>
    </div>

</body>
</html>
