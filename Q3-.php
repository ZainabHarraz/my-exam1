<?php

// 3- $array = [2,4,3,1,6,7,5,8,0,9] .
// Write a PHP program to sort this array to ASC and also sort it as DESC .
// (without using built in functions)



$array = [2,4,3,1,6,7,5,8,0,9];
asort($array);
echo "ASC sort:";
echo "<br>";
foreach ($array as $value) {
 
   echo $value." ";
}
echo "<br>";
echo " DESC sort:";
echo "<br>";
arsort($array);
foreach ($array as $value) {
   echo $value." ";
}












?>