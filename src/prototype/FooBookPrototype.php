<?php


namespace Gxheart\prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
    }
}