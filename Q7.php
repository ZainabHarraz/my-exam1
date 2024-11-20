<?php 

// 7-Write a PHP script to increment date by one month
// Sample date : 2012-12-21
// Expected Output : 2013-01-21.




$inc= date('Y-m-d', strtotime("+1 month"));

echo $inc;









?>