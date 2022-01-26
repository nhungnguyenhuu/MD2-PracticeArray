<?php
function findCharacter($str, $character): string
{
    for($i=0; $i<strlen($str); $i++){
        if($str[$i]==$character){
            return "Ky tu vua nhap co nam trong chuoi";
        }
    }
    return "Ky tu vua nhap khong nam trong chuoi";
}
