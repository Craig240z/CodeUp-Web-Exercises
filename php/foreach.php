<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $items) {
    echo "{$items}" . PHP_EOL;
}
// for ($i = 0; $i < count($things); $i++) {
    // if (is_array($things[$i])) {
        // for ($b = 0; $b < count($things[$i]); $b++) {
            // echo "{$things[$i][$b]}, ";
        // }
            // echo PHP_EOL;

    // } else if (is_scalar($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // } else if (is_bool($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // } else if (is_float($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // } else if (is_integer($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // } else if (is_null($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // } else if (is_string($things[$i])) {
        // echo "{$things[$i]}" . PHP_EOL;
    // }
// }