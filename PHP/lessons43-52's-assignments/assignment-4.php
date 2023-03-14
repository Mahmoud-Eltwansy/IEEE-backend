<?php 
function multiply(...$values){
    $result=1;
    foreach($values as $value):
        if(gettype($value)=="integer")
            $result*=$value;
        elseif(gettype($value)=="double")
            $result*=(int)$value;
    endforeach;
    return $result;
}
echo multiply(10, 20);
?>