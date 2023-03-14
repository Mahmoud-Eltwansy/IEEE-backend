<?php
function calculate($a,$b,$op="")
{
    if($op==""||$op=='a'||$op=="add")
        return $a+$b;
    elseif($op=='s'||$op=="subtract")
        return $a-$b;
    elseif($op=='m'||$op=="multiply")
        return $a*$b;
    else
        return "This Operation Does Not Exist";
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
?>
