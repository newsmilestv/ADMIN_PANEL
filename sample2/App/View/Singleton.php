<?php 
namespace App\View;

trait Singleton
{
    protected static $instance = null;
    protected function __construct()
    {
     
    }

    public static function instance()
    {
        if (null === static::$instance) {
            return static::$instance = new static;
        }
    }
}