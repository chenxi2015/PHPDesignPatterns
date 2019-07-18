<?php

namespace Gxheart\builder;

use Gxheart\builder\parts\Door;
use Gxheart\builder\parts\Engine;
use Gxheart\builder\parts\Truck;
use Gxheart\builder\parts\Vehicle;
use Gxheart\builder\parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var parts\Truck
     */
    private $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}