<?php
function sumArr($arr)
{
    $sum = 0;
    for($i=0; $i<count($arr); $i++){
        $sum+= $arr[$i];
    }
    return $sum;
}
