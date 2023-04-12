<?php 
setcookie("site[color]","blue",strtotime("+2 month +5 days"),"/");
setcookie("site[font]","Swat",strtotime("+2 month +5 days"),"/");
setcookie("site[layout]","boxed",time()-1);
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>