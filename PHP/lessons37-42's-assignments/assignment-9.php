<?php
 $help_num = 3;
 $nums = [4, 5, 6, 1, 2, 3];
 $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
 for(;$help_num<sizeof($nums);$help_num++)
 {
    if($names[$nums[$help_num]]=="Sayed"||$names[$nums[$help_num]]=="Osama")
        echo $names[$nums[$help_num]] ."<br>";
 }
 
 // Output
//  "Sayed"
//  "Osama"
?>