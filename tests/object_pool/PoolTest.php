<?php

namespace Gxheart\Tests;

use Gxheart\object_pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();
        // print_r($pool->getOccupiedWorkers());
        // print_r($pool);

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();
        print_r($worker1);
        print_r($worker2);

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}