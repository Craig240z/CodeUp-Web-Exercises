<?php

date_default_timezone_set('America/Dallas');

function logMessage($logLevel, $message)
{

    $todayDate = date('Y-m-d');
    $todayTime = date('H:i:s');
    $filename = '../data/log-' . $todayDate  . '.log';

    $handle = fopen($filename, 'a');

    $data = $todayDate . ' ' . $todayTime . ' [' . $logLevel . '] ' . $message;
    fwrite($handle, $data . PHP_EOL);

    fclose($handle);// todo - complete this function
}

function logInfo($message) {
    logMessage ("INFO", $message);
    logMessage ("TERMINAL" , $message);
}

function logError($message) {
    logMessage ("ERROR" , $message);
}
 
logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message. Check your CODE!");