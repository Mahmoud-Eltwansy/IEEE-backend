<?php 
setcookie("site[color]","blue",strtotime("+2 month +5 days"),"/");
setcookie("site[font]","Swat",strtotime("+2 month +5 days"),"/");
setcookie("site[layout]","boxed",strtotime("+2 month +5 days"),"/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "Your Color Is " .$_COOKIE["site"]["color"] ." And Your Font Is ". $_COOKIE["site"]["font"];

?>