<?php

namespace Gxheart\prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    abstract public function __clone();

    /**
     * @return mixed
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}