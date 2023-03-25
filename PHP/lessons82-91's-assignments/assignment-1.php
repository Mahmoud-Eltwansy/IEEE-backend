<?php
echo round(disk_total_space("C:")/1024/1024/1024/1024,2)." Terabyte". "<br>";
echo round(disk_total_space("E:")/1024/1024/1024/1024,2)." Terabyte". "<br>";


// Output Examples
// "0.12 Terabyte"
// "0.79 Terabyte"
?>
