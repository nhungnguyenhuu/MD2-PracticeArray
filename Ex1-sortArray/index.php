<?php
function sortArr($arr)
{
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr)-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $tem = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j]=$tem;
            }
        }
    }

    return $arr;
}
function delete($newArr)
{
    for ($i=0; $i<count($newArr)-1; $i++){
        for($j=$i; $j<count($newArr)-$i-1; $j++){
            if($newArr[$j]==$newArr[$j+1]){
                array_splice($newArr, $j, 1);
            }
        }

    }
    return $newArr;
}
function ran()
{
    $rand = mt_rand(0, 20);
    echo $rand . '<br/>';
    $arr = [];
    for ($i = 0; $i < $rand; $i++) {
        $arr[$i] = mt_rand(0, 10);
    }
    return $arr;
}

$arr = ran();
print_r(sortArr($arr));
$newArr = sortArr($arr);
echo "<br>";
print_r(delete($newArr));


