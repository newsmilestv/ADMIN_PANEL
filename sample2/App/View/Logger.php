<?php 

namespace App\View;

class Logger
{
    protected static $path = __DIR__ . '/log.txt';

    public static function writeLog(\Exception $ex)
    {
        $str = date('d.m.Y') . "|" . $ex->getFile() . "|" . $ex->getMessage() . PHP_EOL;
        file_put_contents(static::$path, $str, FILE_APPEND);
    }
}