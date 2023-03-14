<?php 
$num = 2;
$temp =1;

while ($num < 520) {
    echo $temp . "<br>"; 
    $num = $temp *2 +2;
    $temp=$num;

}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382
?>