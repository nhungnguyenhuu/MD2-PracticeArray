<?php
function findMAxEvenPositiveNumber($arr)
{
    $positives = [];
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]>0&&$arr[$i]%2==0){
            $positives[] = $arr[$i];
        }
    }
    $max = $positives[0];
    for ($i= 0; $i<count($positives); $i++){
        if($positives[$i]>$max){
            $max = $positives;
        }
    }
    return $max;
}
