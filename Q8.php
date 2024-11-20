<?php 

// 8- Write a PHP script to get the number of the month before the current month.

$currentmonth= date('m');
$month_before_the_current= date('m',strtotime("-1 month"));
echo "Current month is: ".$currentmonth;
echo"<br>";
echo "Month before the current month is:  ".$month_before_the_current;








?>