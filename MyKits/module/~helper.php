<?php

if (!function_exists('Module')) {
    function Module()
    {
        return call_user_func_array(PHPKit\PHPKit::get(strtolower(__FUNCTION__)), func_get_args());
    }
}
