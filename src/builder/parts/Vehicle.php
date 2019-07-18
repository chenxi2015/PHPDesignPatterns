<?php

namespace Gxheart\builder\parts;

abstract class Vehicle
{
    private $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}