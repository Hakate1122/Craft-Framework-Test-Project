<?php

if (!function_exists('old')) {
    /**
     * Get old input value from the previous request.
     * @param string $key
     * @param mixed $default
     * @return mixed|null
     */
    function old($key, $default = null)
    {
        if (isset($GLOBALS['old'][$key])) {
            return $GLOBALS['old'][$key];
        }
        if (isset($GLOBALS['old']) && is_array($GLOBALS['old']) && array_key_exists($key, $GLOBALS['old'])) {
            return $GLOBALS['old'][$key];
        }
        return $default;
    }
}

if (!function_exists('resource')) {
    /**
     * Get the URL for a resource file.
     * 
     * @param string $path
     * @return string
     */
    function resource($path)
    {
        return \Craft\Application\View::resource($path);
    }
}

if (!function_exists('route')) {
    /**
     * Generate a URL for a named route.
     * 
     * @param string $name 
     * @param array $params 
     * @return string|null
     */
    function route($name, $params = [])
    {
        return \Craft\Application\Router::route($name, $params);
    }
}

if (!function_exists('session')) {
    /**
     * Helper function for session get/set.
     * - session(): get all session variables.
     * - session($key): get session value.
     * - session($key, $value): set session value.
     *
     * @param string|null $key
     * @param mixed|null $value
     * @return mixed|null
     */
    function session($key = null, $value = null)
    {

        if (is_null($key) && is_null($value)) {
            return $_SESSION;
        }

        if (!is_null($key) && is_null($value)) {
            return \Craft\Application\Session::get($key);
        }

        if (!is_null($key) && !is_null($value)) {
            \Craft\Application\Session::set($key, $value);
            return null;
        }

        return null;
    }
}
