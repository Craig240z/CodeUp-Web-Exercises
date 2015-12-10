<?php
require_once "Log.php";

$log = new Log('cli');


// $log = new Log();
$log->info('User logged in successfully');
$log->error('You do not have permission to view this file');
$log->logMessages('error', '404 page not found');
?>