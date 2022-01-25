<?php
function findMin($arr)
{
    $min = $arr[0];
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]<$min){
            $min = $arr[$i];
        }
    }
    return $min;
}