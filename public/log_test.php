<?php
require_once "Log.php";

$log = new Log();
$log->filename = 'log-' . date('Y-m-d') . '.log';
$log->info('User logged in successfully');
$log->error('You do not have permission to view this file');
$log->logMessages('error', '404 pafe not found');
?>