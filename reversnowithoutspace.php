<?php
//Given an array of N integers,reverse it.
//Note:Do this without using any extra space.

$arr=[2,3,6,4,7];
$l=0;
$r=count($arr)-1;

while($l<$r){
    $temp=$arr[$r];
    $arr[$r]=$arr[$l];
    $arr[$l]=$temp;

    $l++;
    $r--;
}

print_r($arr);
?>