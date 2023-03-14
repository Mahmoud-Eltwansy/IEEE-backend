<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
$start++;
for(;$start < sizeof($mix);$start++)
{
    if(is_int($mix[$start])== true)
        echo $mix[$start] . "<br>";
}
// Output
// 2
// 3
// 4
?>