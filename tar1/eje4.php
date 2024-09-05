<?php
// PARA N=13
$n = 13;
$j = 1;
$u = 0;
if ($n % 2 == 0) {
    $u = $n;
} else {
    $u = $n - 1;
}
$t = array();

for ($i = 0; $i < $n; $i++) {
    if ($j <= $n) {
        $t[$i] = $j;
        $j += 2;
    } else {
        $t[$i] = $u;
        $u -= 2;   }
    
    echo $t[$i] . " ";
}
?>
