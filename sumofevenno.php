<?php 

//Create a function that takes a list of numbers as input and returns the sum of all the even numbers in the list.

function getListofNumber($number=array())
{
    $sum=0;
    foreach($number as $key=>$val){
        if($val%2==0){
            $sum+=$val;
        }
    }
    return $sum;
}

echo getListofNumber([1,2,3,4,5,6]);
?>