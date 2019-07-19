<?php

namespace Gxheart\multiton;

final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    private static $instance = [];

    /**
     * Multiton constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param string $instanceName
     * @return Multiton
     */
    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instance[$instanceName])) {
            self::$instance[$instanceName] = new self();
        }

        return self::$instance[$instanceName];
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}