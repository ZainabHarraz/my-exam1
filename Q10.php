<?php 

// 10- Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no
// positive divisors other than 1 and itself.

function prime($num){
  if($num<=1) {
   return"not prime";
   }
    for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        return "not prime"; }
    }
    return "prime";
}

echo prime(101);





?>