<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo strtolower(chunk_split(str_repeat($str,$num),$num,$char))."<br>";

// aaa_aaa_aaa_

?>