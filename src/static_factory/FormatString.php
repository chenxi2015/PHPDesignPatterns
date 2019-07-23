<?php

namespace Gxheart\static_factory;

class FormatString implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}