<?php
function findMinOddNegativeNumber($arr)
{
    $oddNegatives = findOddNegativeNumber($arr);
    $min = $oddNegatives[0];
    for ($i=0; $i<count($oddNegatives); $i++){
        if ($oddNegatives[$i]<$min){
            $min = $oddNegatives[$i];
        }
    }
    return $min;
}
function findOddNegativeNumber($arr)
{
    $oddNegatives =[];
    for ($i=0; $i<count($arr); $i++){
        if($arr[$i]<0&& $arr[$i]%2!=0){
            $oddNegatives[]= $arr[$i];
        }
    }
    return $oddNegatives;
}
