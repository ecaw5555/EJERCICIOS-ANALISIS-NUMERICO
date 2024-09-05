<?php
// PARA N=17
$n = 17;
$j = 1;
$u = 0;

$t = array();

for ($i = 0; $i <$n; $i++) {
    if ($i%3==0) {
        $t[$i] = 1;
    } else {
        $t[$i] = 0; }
    
    echo $t[$i] . " ";
}
?>
