<?php
SESSION_START();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

define("ROOT_DIR", dirname(__DIR__));
$logDir = ROOT_DIR . "/storage/log/";

require_once ROOT_DIR . '/vendor/autoload.php';

$env = new \Datahihi1\TinyEnv\TinyEnv(ROOT_DIR, true);

Craft\Reports\Error::sign(true, $logDir . 'error.log');
Craft\Reports\Exception::sign(true, $logDir . 'exception.log');
Craft\Reports\Parse::sign(true, $logDir . 'parse.log');
Craft\Reports\Runtime::sign(true, $logDir . 'runtime.log');

require_once ROOT_DIR . '/app/Router/web.php';