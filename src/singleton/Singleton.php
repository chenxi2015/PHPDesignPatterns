<?php

namespace Gxheart\singleton;

final class Singleton
{

    private static $instance;

    public static function getInstance(): Singleton
    {
        if (null === self::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}