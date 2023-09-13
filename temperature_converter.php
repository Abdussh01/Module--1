<?php
$temprature=(int)readline("Please enter temprature: ");

$method= (int) readline('Please select conversation method , 1for C -> F , 2 for F -> C :');

if($method==1){
    $result=($temprature * 9 / 5) + 32;
    echo $result;
}elseif($method==2){
$result=($temprature - 32) / 1.8;
echo $result;
}else{
    echo "Invalid number";
}