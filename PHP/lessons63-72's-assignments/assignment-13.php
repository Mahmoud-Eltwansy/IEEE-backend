<?php
$nums = [10, 100, -20, 50, 30];
$largest=$nums[0];
foreach($nums as $i){
    if($i > $largest)
        $largest =$i;
}
echo $largest;

// Output
100
?>
