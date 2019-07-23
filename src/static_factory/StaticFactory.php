<?php

namespace Gxheart\static_factory;

final class StaticFactory
{

    public static function factory(string $type): Formatter
    {
        if ($type == 'number') {
            return new FormatNumber();

        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException("Unknown format given");
    }
}