<?php 

//6- write a program to find the max number of numbers group [10,30,20], using if.


$array=[10,30,20];
if ($array[0]> $array[1] && $array[0]> $array[2] )
{
       echo $array[0] ." is the max number";
}elseif ($array[1]> $array[0] && $array[1]> $array[2] )
{
    echo $array[1] ." is the max number";
}else{
    echo $array[2] ." is the max number";
}












?>