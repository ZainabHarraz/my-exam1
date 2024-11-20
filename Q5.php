<?php 


//5- write a program to filter even numbers from an array, delete all even numbers.

$array =[1,2,3,4,5,6,7,8,9,10 ,13 ,77, 55, 90, 40];
$newarray=[];
$even=[];
for($i=0; $i<count($array); $i++) {
    if( ($array[$i] % 2) != 0  ){
        $newarray[]= $array[$i];
    }
    else{
        $even[]=$array[$i];
    }
}
echo "<br> Filtered array: <br>";
foreach($newarray as $val)
{   
    echo $val." ";
}
echo "<br> ";
echo "<br>  even numbers are : <br>";

foreach($even as $value)
{
    echo $value." ";
}










?>