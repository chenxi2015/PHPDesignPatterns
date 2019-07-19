<?php

namespace Gxheart\Tests;

use Gxheart\builder\CarBuilder;
use Gxheart\builder\Director;
use Gxheart\builder\parts\Car;
use Gxheart\builder\parts\Truck;
use Gxheart\builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        // print_r($newVehicle);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        // print_r($newVehicle);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }

}