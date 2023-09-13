<?php
$marks =(int)readline("Enter input:") ;
if($marks>=90){
    echo "great A";
}
elseif ($marks>=80){
    echo "Great B";
}
elseif($marks>=70){
    echo "Great C";
}
elseif($marks>=60){
    echo "Great D";
}
else
    echo "Great F";
