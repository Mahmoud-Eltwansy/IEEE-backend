<?php
date_default_timezone_set("Africa/Cairo");
$date=date_create("1990-10-01");
$date1=date_create("01-01-1970");

$diff=date_diff($date,$date1);

echo '<pre>';
print_r($diff);
echo '</pre>';
echo "From Epoch Time Till 1990-10-01 Is Approximately ".$diff->days." Days". "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately ".round($diff->days/365,1) ." Years". "<br>";


// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>