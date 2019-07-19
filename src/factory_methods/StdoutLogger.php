<?php

namespace Gxheart\factory_methods;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}