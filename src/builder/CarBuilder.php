<?php

namespace Gxheart\builder;

use Gxheart\builder\parts\Car;
use Gxheart\builder\parts\Door;
use Gxheart\builder\parts\Engine;
use Gxheart\builder\parts\Vehicle;
use Gxheart\builder\parts\Wheel;

class CarBuilder implements BuilderInterface
{
    /**
     * @var parts\Car
     */
    private $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}