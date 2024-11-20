<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .white{
            background-color: peachpuff;
            width: 100px;
            height: 100px;
        }
        .black{
            background-color: black;
            width: 100px;
            height: 100px;
        }
        .big{
            display: flex;
            width: 100%;
        }

    </style>
</head>
<body>
<?php 
for($i=0; $i<5; $i++){

    for($x=0 ;$x<1; $x++){
      echo' <div class="big">
                <div class="black"></div>
                <div class="white"></div>
                <div class="black"></div>
                <div class="white"></div>
            </div>';
    }
    echo'<div class="big">
            <div class="white"></div>
            <div class="black"></div>
            <div class="white"></div>
            <div class="black"></div>
           
        </div>';}
?>

</body>
</html>