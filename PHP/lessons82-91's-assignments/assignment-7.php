<?php
$handle=fopen("elzero.txt","r");
$str= nl2br(fread($handle,1024)) ;
$str=str_replace("Osamaa","Elzero",$str);
fclose($handle);

echo $str;


// // elzero.txt Content
// Hello Osamaa Web
// School

// // elzero.txt New Content
// Hello Elzero Web
// School

?>
