<?php

namespace Gxheart\Tests;

use Gxheart\static_factory\FormatString;
use Gxheart\static_factory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf('Gxheart\static_factory\FormatNumber', StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        StaticFactory::factory('object');
    }
}