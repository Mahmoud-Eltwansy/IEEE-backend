<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$no_of_nums=0;
$no_of_char=0;
for($i=0;$i<sizeof($mix);$i++)
{
    if(is_int($mix[$i])==true)
    {
        echo $mix[$i]. "<br>";
        $no_of_nums++;
    }
    else
    {
        $no_of_char++;
    }
}
echo $no_of_nums." Numbers Printed". "<br>";
echo $no_of_char." Letters Ignored" . "<br>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
?>