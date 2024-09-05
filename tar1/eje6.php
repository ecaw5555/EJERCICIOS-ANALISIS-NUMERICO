<?php
// PARA MATRIZ 1
$n = 10;
$n1=$n;

for ($i = 0; $i <$n; $i++) {
    for ($j = 0; $j <$n; $j++) {
    if ($i==$j ) {
        $t[$i][$j] = 1;
    } else {
        $t[$i][$j] = " "; }
    
}}
for ($i = 0; $i <$n1; $i++) {
        $n1=$n1-1;
        $t[$i][$n1] = 1;
}
$n1=$n;
for ($i = 0; $i <$n1; $i++) {
    $n1=$n1-1;
    $t[$n1][$i] = 1;
}
for ($i = 0; $i <$n; $i++) {
    for ($j = 0; $j <$n; $j++) {
        echo $t[$i][$j] . " ";
    }
    echo "\n";
}
//PARA MATRIZ 2
$n = 8;
$n1=$n;
$y=1;
for ($i = 0; $i <$n; $i++) {
    for ($j = 0; $j <$n; $j++) {
        $t[$i][$j] = "  ";     
}}
for ($i = 0; $i <$n; $i++) {
        $n1=$n1-1;
        $t[$n-1][$n1] =" ". $y;
      
        $y=$y+1;
    
}
$n1=$n-1;
for ($i = 1; $i <$n; $i++) {
    $n1=$n1-1;
    $t[$n1][$i] = $y;
  
    $y=$y+1;

}
$n1=$n-1;
for ($i = 1; $i <$n; $i++) {
    $n1=$n1-1;
    $t[0][$n1] = " ".$y;
  
    $y=$y+1;

}

for ($i = 0; $i <$n; $i++) {
    for ($j = 0; $j <$n; $j++) {
        echo $t[$i][$j] . " ";
    }
    echo "\n";
}
?>