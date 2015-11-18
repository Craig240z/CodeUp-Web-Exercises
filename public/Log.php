<?php

class Log
{
    public $filename = '';

    public function logMessages($logLevel, $messages)
    {
        // $todayDate = date('Y-m-d');
        // $todayTime = date('H:i:s');
        // $this->$filename = '../data/log-' . $todayDate  . '.log';

        $dateWithTime = date('Y-m-d , H:i:s');

        $stringToWrite = "$dateWithTime [{$logLevel}] $messages";

        $handle = fopen($this->filename, 'a');

        // $data = $todayDate . ' ' . $todayTime . ' [' . $logLevel . '] ' . $messages;
        fwrite($handle, PHP_EOL . $stringToWrite);

        fclose($handle);

    }

    public function info($messages)
    {
        $this->logMessages("INFO", $messages);
    }

    public function error($messages)
    {
        $this->logMessages("ERROR" , $messages);  
    }
}