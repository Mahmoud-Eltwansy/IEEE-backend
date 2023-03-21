<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$filtered_arr = array();
foreach($mix as $key=>$value)
{
    if(gettype($value) == 'integer' && ($value %2) !=0)
    {
        $filtered_arr[] = $value;
    } 
}
echo '<pre>';
sort($filtered_arr);
print_r($filtered_arr);
echo '</pre>';

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )
?>
