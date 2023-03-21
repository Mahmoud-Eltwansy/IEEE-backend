<?php
$nums = [1, 2, 3, 4, 5, 6];
function array_shuffle($array) {
    $i = count($array);
    while(--$i) { 
        $j = mt_rand(0, $i);
        if ($i != $j) {
             $tmp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $tmp;
        }
    }
    return $array;
}
$nums = array_shuffle($nums);
echo '<pre>';
print_r($nums);
echo '</pre>';

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )
?>
