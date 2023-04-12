<?php 
setcookie("site[color]","blue",0,"/");
setcookie("site[font]","Swat",0,"/");
setcookie("site[layout]","boxed",time()-1);
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

?>