<?php

namespace App\View;

trait TMagic
{
    protected $data = [];

    public function __set($name, $value)
    {
        return $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}
