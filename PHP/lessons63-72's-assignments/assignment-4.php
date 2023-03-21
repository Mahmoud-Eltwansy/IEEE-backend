<?php
$nums = [10, 20, 30];
$add=fn($num1,$num2)=> $num1+$num2;
echo array_reduce($nums,$add)."<br>";

echo array_sum($nums);

// Output
// 60
// 60

?>