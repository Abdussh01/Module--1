<?php
$number1=(int)readline("Enter first value::");
$number2=(int)readline("Enter second valure::");
$operator=(int)readline("Selet the operator 1=>addition 2=>subraction 3=>multiplication 4=>division::");
if($operator==1){
    $result = $number1+$number2;
    echo $result;
}elseif($operator==2){
    $result = $number1*$number2;
    echo $result;
}elseif($operator==3){
    $result = $number1/$number2;
    echo $result;
}elseif($operator==4){
    $result = $number1%$number2;
    echo $result;
}else
    echo "Invalid number";