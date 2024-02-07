<?php 
//write a program to find number of even no in array


$arr=[1,2,3,4,5,6,7,9,10];

$sum=0;
for($i=0;$i<sizeof($arr);$i++){

    if($arr[$i] % 2==0){
      //  $sum+=1;
      $sum = $sum + 1;
    }
    
}
echo "The number of even elementes are ".$sum;
?>