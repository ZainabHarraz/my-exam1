<?php 
//2
echo"2- <br>";
for($i=0 ;$i<5; $i++ )
{
    for($x=0; $x <=$i; $x ++){
        echo"* ";
    }
    echo"<br>";
}
for($i=0 ;$i<5; $i++ )
{
    for($x=5; $x >$i; $x--){
        echo"* ";
    }
    echo"<br>";
}
echo"<br>";
echo"<br>";
//3
echo"3- <br>";
for($i=0 ;$i<5; $i+=2 )
{
    for($x=0; $x <=$i; $x++){
        echo"* ";
    }
    echo"<br>";
}
for($i=1;$i<2; $i++)
{
    for($x=3; $x>=$i; $x--){
        echo"* ";
    }
    echo"<br>";
    echo"* ";
}

echo"<br>";
echo"<br>";


?>