<?php

$low = 134792; //batas bawah
$up = 675810;  //batas atas
$count = 0;    //desclarasi start count

for ($i = $low; $i <= $up; $i++) { //loop batas bawah - up
    if (asc_f(strval($i))) { //cek ke asc data func
        if (dua_digit(strval($i))) { //cek dua digit data
            $count++;
        }
    }

}
echo $count;

function dua_digit($password)
{
    for ($i = 0; $i < 5; $i++) {
        $num = $password[$i];
        $count = substr_count($password, $num);
        if ($count >1){
            return true;
        }
    }
    return false;
}

function asc_f($password)
{
    for ($i = 0; $i < 5; $i++) {
        if ($password[$i] > $password[$i + 1]) {
            return false;
        }

    }
    return true;
}
?>
