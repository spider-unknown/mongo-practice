<?php
/**
 * Created by PhpStorm.
 * User: air
 * Date: 7.01.2020
 * Time: 10:20
 */

namespace App\Helpers;


class Helper
{
    public static function urlActiveHelper($routeName)
    {
        return strpos(request()->route()->getName(), $routeName) !== false ? " active " : "";
    }

    public static function adminPath($path)
    {
        return 'admin.contents.' . $path;
    }

    public static function urlActiveHelperStartsWith($routeName)
    {
        return self::startsWith(request()->route()->getName(), $routeName) ? " active " : "";
    }

    public static function urlActiveArrayHelper($routeNames = array())
    {
        foreach ($routeNames as $routeName) {
            if (strpos(request()->route()->getName(), $routeName) !== false)
                return " show ";
        }
        return "";
    }

    public static function urlActiveArrayActiveHelper($routeNames = array())
    {
        foreach ($routeNames as $routeName) {
            if (strpos(request()->route()->getName(), $routeName) !== false)
                return " active ";
        }
        return "";
    }

    protected static function startsWith ($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
}
