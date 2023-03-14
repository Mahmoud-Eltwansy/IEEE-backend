<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if($_SERVER["REQUEST_METHOD"]==="POST")
{
  $name=$_POST['user'];
  echo "The Request Method Is Post And Username Is $name";
  echo '<br>';
  if(in_array($name,$admins))
  {
    echo "This Username $name Is Admin";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
    
</body>
</html>
