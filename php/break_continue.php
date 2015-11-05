<?php

// for ($i = 1; $i <= 200; $i++) {
//     echo $i . PHP_EOL;
//     if ($i == 100) {
//         break;
//     }
// }

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo $i . PHP_EOL;
    echo "^ is an even number." . PHP_EOL;
}

for ($i = 1; $i <= 100; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i" . PHP_EOL;
}