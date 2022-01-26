<?php
function sortDown($arr)
{
    for($i = 0; $i<count($arr); $i++){
        for($j=0; $j<count($arr)-$i-1; $j++){
            if($arr[$j]<$arr[$j+1]){
                $tem = $arr[$j];
                $arr[$j]= $arr[$j+1];
                $arr[$j+1]=$tem;
            }
        }
    }
    return $arr;
}
$arr =[1, 2, 3, 1, -1, -2, 5];
print_r(sortDown($arr));