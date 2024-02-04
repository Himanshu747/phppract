<?php
//Write a php program to swap the values of two variables without using a temporary variable.


$x=10;
$y=20;

$x=$x+$y;
$y=$x-$y;
$x=$x-$y;


echo "x is ".$x."<br>";
echo "y is ".$y."<br>";


//if we make a function and put this on function then it should be like this


function get_Temp_variable($x,$y){
  
    $x= $x+ $y;
    $y= $x- $y;
    $x= $x -$y;
    $final_result="X value is ".$x."<br>Y value is ".$y;
    return $final_result;
}

echo get_Temp_variable(20,34);
?>