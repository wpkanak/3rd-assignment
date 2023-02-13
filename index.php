<?php

// The 1st Question is

function even_odd_checker($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}


$result = even_odd_checker(4);
echo $result;


// The 2nd Question is

$sum = 0;

for($i = 1; $i <= 100; $i++){
  $sum += $i;
}

echo "The summation of the series is" . $sum; 