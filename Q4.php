<?php 


//write a program to calculate the avg of numbers array.
    $array =[1,2,3,4,5,6,7,8,9,10];
    if(count($array)>0){
    $count=0;
    foreach($array as $val){
       $count +=  $val;
    }
    echo "The total is = ". $count. "<br>";
    echo"The AVG of numbers array is= ".$count/count($array);
    }else{
        echo "There is no number to calcuate";
    }

    echo "<br>";
    //or 
    if(count($array)>0){
    $count=0;
    for($i=0 ; $i<count($array); $i++){
    $count +=  $array[$i];
    }
    echo "The total is = ". $count. "<br>";
    echo"The AVG of numbers array is= ".$count/count($array);
    }else{
        echo "There is no number to calcuate";
    }


?>