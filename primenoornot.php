<?php 
//Write a Python function to check if a given number is prime or not.


function checkPrimeNo($number){
    if($number<2){
        return false;
    }

    $limit = (int)($number ** 0.5)+1;

    for($i=2;$i<=$limit;$i++){
   
        if($number % $i == 0){
          return true;
        }
    }
    return false;
}
$no=2;

$checkPrime=checkPrimeNo($no);

if($checkPrime){
    echo $no." is prime no";
}
else{
    echo $no." is not prime";
}
?>