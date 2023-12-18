<?php
namespace Core;

trait UrlEngine
{
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function path()
    {
        return $_SERVER['REQUEST_URI'];
    }
}