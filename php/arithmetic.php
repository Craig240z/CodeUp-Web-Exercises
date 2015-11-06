<?php

$a = 10;
$b = 2;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    }  else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;// Add code here
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;// Add code here
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && ($a) != 0 && ($b) !=0) {
        return $a / $b;// Add code here
    } else {
        return "ERROR: Both arguments must be numbers and or Zero is not divisible. Try again." . PHP_EOL;
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

// function multiplyWithFor($a, $b) {
//     if(is_numeric($a) && is_numeric($b)) {
//         $sum = 0
//         for ($i = 0; $i <= $b; $i++) {
//             $sum = $sum + $a;
//         }
//         return $sum;
//     } else {
//         return 'error';
//     }
// }
echo add(5, 4) . PHP_EOL;
echo subtract(5, 4) . PHP_EOL;
echo multiply(5, 4) . PHP_EOL;
echo divide(5, 4) . PHP_EOL;   
echo modulus(5, 4) . PHP_EOL;

echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;

// Add code to test your functions here