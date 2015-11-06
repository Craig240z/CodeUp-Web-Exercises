<?php

$a = 10;
$b = 2;

function areValidInputs($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return true;    
    } 
}
function errorMessages($a, $b) {
    return "ERROR: Both arguments must be numbers. You gave {$a} and {$b}." . PHP_EOL;
}
function isZero($b) {
    if ($b == 0) {
        return true;
    } else {
        return false;
    }
}
function add($a, $b) {
    if (areValidInputs($a, $b))  {
        return $a + $b;
    }  else {
        return errorMessages($a, $b) ;
    }
}

function subtract($a, $b) {
    if (areValidInputs($a, $b))  {
        return $a - $b;// Add code here
    } else {
        return errorMessages($a, $b);
    }
}

function multiply($a, $b) {
    if (areValidInputs($a, $b)) {
        return $a * $b;// Add code here
    } else {
        return errorMessages($a, $b);
    }
}

function divide($a, $b) {
    if (areValidInputs($a, $b)) {
        if (isZero($b)) {
            return "ERROR: Cannot divide by zero. Got {$b}." . PHP_EOL;
        } 
        return ($a / $b);
    } else {
        return errorMessages($a, $b);
    }
}
       
function modulus($a, $b) {
    if (areValidInputs($a, $b)) {
        if (isZero($b)) {
            return "ERROR: Cannot modulus by zero . Try again. Got {$b}." . PHP_EOL;
        }
        return ($a % $b);
     } else {
            return errorMessages($a, $b); 
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
echo add(a, 4) . PHP_EOL;
echo subtract(5, 4) . PHP_EOL;
echo multiply(5, 4) . PHP_EOL;
echo divide(5, 0) . PHP_EOL;   
echo modulus(5, 0) . PHP_EOL;

echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;

// Add code to test your functions here