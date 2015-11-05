<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

for ($i = 0; $i < count($things); $i++) {
    if (is_array($things[$i])) {
        echo  "index {$i} This is an array" . PHP_EOL;
    } else if (is_bool($things[$i])) {
        echo "index {$i} This is a boolean" . PHP_EOL;
    } else if (is_float($things[$i])) {
        echo "index {$i} This is a float" . PHP_EOL;
    } else if (is_integer($things[$i])) {
        echo "index {$i} This is a integer" . PHP_EOL;
    } else if (is_null($things[$i])) {
        echo "index {$i} This is null" . PHP_EOL;
    }else if (is_string($things[$i])) {
        echo "index {$i} This is a string" . PHP_EOL;
    }
    }