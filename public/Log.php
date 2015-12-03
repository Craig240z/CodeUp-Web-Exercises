<?php

class Log
{
    // public $filename = '';
    public $filename;
    public $handle;

    public function __construct($prefix = 'log')
    {
        $today = date('Y-m-d');

        $this->filename = '{$prefix} - {$today}.log';

        $this->handle = fopen($this->filename, 'a');
    
    }


    public function logMessages($logLevel, $messages)
    {
        // $todayDate = date('Y-m-d');
        // $todayTime = date('H:i:s');
        // $this->$filename = '../data/log-' . $todayDate  . '.log';

        $dateWithTime = date('Y-m-d , H:i:s');

        $stringToWrite = "$dateWithTime [{$logLevel}] $messages";


        // $data = $todayDate . ' ' . $todayTime . ' [' . $logLevel . '] ' . $messages;
        fwrite($this->handle, PHP_EOL . $stringToWrite);


    }

    public function info($messages)
    {
        $this->logMessages("INFO", $messages);
    }

    public function error($messages)
    {
        $this->logMessages("ERROR" , $messages);  
    }
    public function __destruct() {
        fclose($this->handle);

    }
}
?>