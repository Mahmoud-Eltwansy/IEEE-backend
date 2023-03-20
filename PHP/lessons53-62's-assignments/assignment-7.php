<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$str= ucfirst(strtolower(implode("",$chars)));
echo preg_replace("/12/","",$str);
// Output
"Elzero"

?>