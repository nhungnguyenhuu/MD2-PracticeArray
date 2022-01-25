<?php
include_once "showArr.php";
include_once "findMin.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_REQUEST["number"];
    $arr = explode(",", $number);
   print_r(showArr($arr));
   echo "<pre>";
    echo findMin($arr);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>Nhap mang so vo ty bat ky</p>
    <input type="text" name="number" placeholder="Nhap mang so vo ty bat ky">
<!--    <p>So nho nhat trong mang --><?php //echo findMin($arr) ?><!--</p>-->
    <button>Check</button>
</form>
</body>
</html>
