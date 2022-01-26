<?php
function findUpperCase($str, $pattern){
    for($i =0; $i<strlen($str); $i++){
        if(preg_match($pattern, $str[$i])){
            return "Chuoi ban vua nhap co ky tu in HOA"."<br>";


        }else{
            return "Chuoi ban vua nhap khong co ky tu in HOA"."<br>";
        }
    }
}
