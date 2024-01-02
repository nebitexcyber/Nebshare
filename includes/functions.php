<?php
// includes/functions.php

function logError($message) {
    $logFile = 'logs/error.log';
    $logMessage = date('Y-m-d H:i:s') . ' ' . $message . PHP_EOL;

    error_log($logMessage, 3, $logFile);
}
?>
