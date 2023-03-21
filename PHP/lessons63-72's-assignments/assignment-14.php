<?php
$nums = [10, 100, -20, 50, 30];

$min=$nums[0];
foreach($nums as $i){
    if($i<$min)
        $min = $i;
}
echo $min;
// Output
// -20
?>
