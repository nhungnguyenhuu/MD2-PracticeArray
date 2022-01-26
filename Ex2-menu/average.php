<?php
include_once "sum.php";
function findAverage($arr)
{
    return sumArr($arr)/count($arr);
}
$arr =[1, 2, 3, 1, -1, -2, 5];
echo findAverage($arr);