<?php

function logMessage($logLevel, $message)
{
    $handle = fopen($filename, 'a');
        $todayDate = date("Y-M-D");
        $filename = '..data/log-' . $today  . '.log';
        $todayTime = $todayDate . '' . time("H:M:S");


// foreach ($newCities as $city) {
//     fwrite($handle, PHP_EOL . $city);
// }
// fclose($handle);// todo - complete this function
// }

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
