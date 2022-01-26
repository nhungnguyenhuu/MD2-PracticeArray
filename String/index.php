<?php
include_once "characterOnStr.php";
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $str = $_REQUEST["string"];
    $cha= $_REQUEST["character"];
    $pattern1 = '/^[0-9]+$/';
    $pattern2 ='/^[A-Z]+$/';

    echo "Chuoi ban vua nhap la: ".$str."<br>";
   echo findNumberInStr($str, $pattern1)."<br>";
   echo findUpperCase($str, $pattern2)."<br>";
   echo findCharacter($str, $cha);




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
    <p>Nhap mot chuoi bat ky</p>
    <input type="text" name="string" placeholder="Nhap chuoi">
    <p>Nhap ky tu bat ky</p>
    <input type="text" name="character" placeholder="Nhap ky tu bat ky">
    <button>Check</button>
</form>
</body>
</html>
