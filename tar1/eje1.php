<?php
//PARA N=5
$n = 5; 
$i = 0;
$j1 = 1;

while ($i < $n) {
    $d = 0;
    for ($j = 1; $j <= $j1; $j++) {
        if ($j1 % $j == 0) {
            $d++;
        }
    }
    if ($d == 2) {
        echo "$j1"." ";
        $i++;
    }
    $j1++; }
echo" \n";    
//PARA N=6
$n = 6; 
$i = 0;
$j1 = 1;

while ($i < $n) {
    $d = 0;
    for ($j = 1; $j <= $j1; $j++) {
        if ($j1 % $j == 0) {
            $d++;
        }
    }
    if ($d == 2) {
        echo "$j1"." ";
        $i++;
    }
    $j1++; }
?>