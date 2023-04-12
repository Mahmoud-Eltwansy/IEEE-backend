<?php
date_default_timezone_set("Africa/Cairo");

$date1 = time();
$date = "1990-10-01";
$diff = abs(strtotime($date1) - strtotime($date));

echo "From Epoch Time Till 1990-10-01 Is Approximately ".round($diff/60/60/24,1)." Days". "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately ".round($diff/60/60/24/365,1)." Years". "<br>";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>