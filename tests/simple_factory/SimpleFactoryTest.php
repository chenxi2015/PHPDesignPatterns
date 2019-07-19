<?php

namespace Gxheart\Tests;

use Gxheart\simple_factory\Bicycle;
use Gxheart\simple_factory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicyle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicyle);
    }
}