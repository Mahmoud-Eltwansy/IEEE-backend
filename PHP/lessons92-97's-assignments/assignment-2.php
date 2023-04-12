<?php
date_default_timezone_set("Africa/Cairo");
$date = "2005-10-02";
$d=date_create($date);

echo date_default_timezone_get(). "<br>";

date_modify( $d , "+15 hours +15 minutes +15 seconds");
echo date_format($d,"Y, F, l 'dS' G:i:s ");

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"

?>