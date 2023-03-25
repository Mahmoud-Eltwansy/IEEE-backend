<?php
// echo mb_strlen("Hello Elzero Web\r\nSchool");
$handle=fopen("elzero.txt","r");

echo fread($handle,24). "<br>";  // 1

rewind($handle);

echo fgets($handle);
echo fgets($handle). "<br>";  // 2

fclose($handle);

echo file_get_contents("elzero.txt",true,NULL,0,24). "<br>";  // 3

$array=[];
$array=file("elzero.txt");
for($i=0;$i<=1;$i++)          //4
    echo $array[$i];


// // elzero.txt Content
// Hello Elzero Web
// School
// No Need To Read

// // Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
?>
