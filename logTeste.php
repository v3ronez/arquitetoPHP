<?php

declare(strict_types = 1);

use App\Log\LogFileManager;

require 'vendor/autoload.php';

$path = __DIR__.'/log.txt';
$logManager = new LogFileManager($path);
$logManager->log('INFO', 'testando12');
