<?php
$chars = ["A", "B", "C"];
$newArray=["D"];


// $chars[]="D";   First Method

// array_push($chars,"D"); Second Method

// echo '<pre>';
// print_r(array_pad($chars,4,"D"));  Third Method
// echo '</pre>';

// $chars=array_merge($chars,$newArray); Fourth Method

echo '<pre>';
print_r($chars);
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )
?>
