<?php 
function get_arguments(...$names)
{
    $all="";
    foreach($names as $i):
        $all= $all . " ". $i;
    endforeach;
    return $all;

}
echo get_arguments("Hello", "Elzero", "Web", "School");
?>