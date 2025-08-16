<?php
namespace Craft\Application;

/**
 * Log class for writing log messages to a file.
 *
 * This class provides a method to write log messages with timestamps.
 */
#region Log
class Log
{
    /**
     * Write a log message to the specified file.
     *
     * @param string $message The message to log.
     * @param string $file The file to write the log to.
     */
    public static function write($message, $file = 'app.log')
    {
        $logFile = ROOT_DIR . '/logs/' . $file;
        if (!file_exists(dirname($logFile))) {
            mkdir(dirname($logFile), 0755, true);
        }
        file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }
}
#endregion