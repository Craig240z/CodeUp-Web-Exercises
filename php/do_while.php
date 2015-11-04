<?php

$a = 0;
do {
    echo "\$a is equal to {$a}\n";
    $a = $a += 2;
} while ($a <= 100);

echo PHP_EOL . PHP_EOL;

$a = 100;
do {
    echo "\$a is equal to {$a}\n";
    $a = $a -= 5;
} while ($a >= -10);

echo PHP_EOL . PHP_EOL;

$a = 2;
do {
    echo "\$a is equal to {$a}\n";
    $a = $a *= $a;
} while ($a <= 1000000);