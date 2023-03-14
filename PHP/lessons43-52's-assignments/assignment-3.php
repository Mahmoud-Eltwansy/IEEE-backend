<?php 
function sum_all(...$nums){
    $result=0;
    foreach($nums as $num):
        if($num!=5 && $num !=10)
            $result+=$num;
        elseif($num ==10)
            $result +=$num*2;
    endforeach;
    return $result;
}
echo sum_all(5, 10, 5, 10);
?>