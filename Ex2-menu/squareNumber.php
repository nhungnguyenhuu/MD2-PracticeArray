<?php
function findSquareNumber($arr)
{
    $squareNumbers = [];
    for($i=0; $i<count($arr); $i++){
        if(sqrt($arr[$i])%1==0){
            $squareNumbers[] = $arr[$i];
        }
    }
    return $squareNumbers;
}
$arr = [1, 1, 9, 16, 5, 4, 3, 2, 1, 3, 2, 1];
print_r(findSquareNumber($arr));