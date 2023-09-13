<?php
$number1 = (int)readline("Enter first value:");
$number2 = (int)readline("Enter second value:");
$result = ($number1>$number2)?"$number1 is greater than $number2":"$number1 is less than $number2";
echo $result;