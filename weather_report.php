<?php
$weather = 10;
if ($weather<0){
    echo "It's freezing!";
}elseif($weather>0 && $weather<15){
    echo "It's cool.";
}
else
    echo "It's warm.";