<?php 

namespace App\Traits;

trait Singleton
{
    protected static $instance = null;

    public static function instance()
    {
        if (null === static::$instance) {
            return static::$instance = new static;
        }
    }
}

