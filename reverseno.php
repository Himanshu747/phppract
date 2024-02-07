<?php

$arr=[2,1,3,4,7];

$newarr=[];
$j=0;
for($i=sizeof($arr);$i>=0;$i--){
   
    $newarr[$j]=$arr[$i];
    $j=$j+1;
}

for($i=0;$i<=sizeof($newarr);$i++){
    echo $newarr[$i];
}
//echo $newarr;

?>