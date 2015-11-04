<?php

echo 'Hello World';

 $a = 5;
 $b = 10;
 $c = '10';

echo "a is $a" . PHP_EOL;
echo "b is $b" . PHP_EOL;
echo "c is $c" . PHP_EOL;

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is greater than $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 }

 if ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c and has the same data type\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }


 $a = 5;
 $b = 10;
 $c = '10';

 // Shorten the next 2 statements into an if/else
 if ($a < $b) {
     echo "$a is less than $b";
 } else {
     echo "$b is greater than $a";
 }

 // Shorten the next 2 statements into an if/else
 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 } else {
     // output the appropriate result
     echo "$b is NOT greater than or equal to $c\n";
 }

 // combine the next 4 conditionals into
 // one if/else/elseif block that checks in order for:
 // identical, equal, not identical, not equal
 if ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c" . PHP_EOL;
 } else if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c" . PHP_EOL;
 } else if ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c" . PHP_EOL;
 } else if ($b !== $c) {
     // output the appropriate result
     echo "$b is not identical to $c" . PHP_EOL;
 }

 ?>
 ?>
