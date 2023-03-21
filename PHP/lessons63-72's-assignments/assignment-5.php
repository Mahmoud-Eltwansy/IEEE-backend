<?php
$nums = [5, 10, 20, 5, 30, 40];

function check_nums($num){
    if($num!=5)
        return $num;
    else
        return 0;
}
echo array_sum(array_filter($nums, "check_nums"));
// Output
// 100

?>
