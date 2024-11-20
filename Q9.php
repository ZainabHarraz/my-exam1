<?php 

// 9-Write a PHP script that checks if a string contains another string.(using regular-
// expression).


$string = " we love php ";
$str = "/PHP/i";

if(preg_match($str, $string)){
  echo "CONTAIN ";
}else{
       echo " NOT CONTAIN ";
}







?>