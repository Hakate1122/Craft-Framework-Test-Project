<?php
namespace Craft\Application;

use Exception;

/**
 * App Class
 *
 * This class initializes and boot the application environment, sets up error handling,
 * loads environment variables, and configures reporting for errors, exceptions,
 * and runtime issues. It also handles CLI reporting if the application is run
 * from the command line.
 */
#region App
class App
{
    /**
     * Version of Craft Framework.
     * @var string
     */
    public const version = '1.0.3-dev';
}
#endregion