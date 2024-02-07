<?php
    /* Given an array of N integers,and a number value,the task is to find the number of pairs of integers in the array whose sum is equal to given value*/


    $arr=[4,2,1,5,6,12,23];
    $value=8;
    $count = 0;

    for($i=0;$i<sizeof($arr);$i++){
      
        for($j=$i+1;$j<sizeof($arr);$j++){
            
            if($arr[$i]+$arr[$j] == $value){
               $count = $count +1;
            }
        }
    }
    echo $count;
?>