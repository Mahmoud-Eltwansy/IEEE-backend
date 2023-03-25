<?php
if(!file_exists("Programming/PHP"))
{
    mkdir("Programming/PHP",0700,true);
}
$script=false;

if($script == true){
if(rmdir("Programming/PHP")==true)
    echo 'Directory Programming/PHP Removed' . "<br>";
if(rmdir("Programming")==true)
    echo "Directory Programming Removed";
}
// // Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"
?>
