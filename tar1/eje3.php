<?php
//PARA N=11
$n=11;
$t=1;
$r=0;
$r1=0;
for ($i=1;$i<=$n; $i++) {
if($i%2==1){
echo" ".$t." ";
$t++;
}
else{
echo" ".$r." ";
if($r1%2== 0){
  $r=1;
}
else{
    $r=0;
}
$r1++;
}
}
?>