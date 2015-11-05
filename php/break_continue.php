<?php

// for ($i = 1; $i <= 200; $i++) {
//     echo $i . PHP_EOL;
//     if ($i == 100) {
//         break;
//     }
// }

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
    if ($i % 1 == 0) {
        continue;
    }
}