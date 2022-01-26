<?php
include_once "average.php";
function findBiggerAverage($arr)
{
    $max = findAverage($arr);
    $biggerAverage = [];
    for($i = 0; $i<count($arr); $i++){
        if($arr[$i]>$max){
            $biggerAverage[]=$arr[$i];
        }
    }
    return $biggerAverage;
}
