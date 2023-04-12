<?php
date_default_timezone_set("Africa/Cairo");
echo time() . "<br>";

$dateTime=new DateTime();
echo $dateTime->getTimestamp(). "<br>";

$timestamp = $_SERVER['REQUEST_TIME'];
echo $timestamp;

?>