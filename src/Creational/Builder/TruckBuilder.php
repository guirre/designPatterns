<?php

declare(strict_types=1);

namespace Guirre\DesignPatterns\Creational\Builder;

use Guirre\DesignPatterns\Creational\Builder\Parts\Door;
use Guirre\DesignPatterns\Creational\Builder\Parts\Engine;
use Guirre\DesignPatterns\Creational\Builder\Parts\Truck;
use Guirre\DesignPatterns\Creational\Builder\Parts\Vehicule;
use Guirre\DesignPatterns\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;
    public function createVehicule()
    {
        $this->truck = new Truck();
    }
    public function getVehicule(): Vehicule
    {
        return $this->truck;
    }
    public function addEngine()
    {
        $this->truck->setPart('Engine', new Engine());
    }
    public function addDoor()
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
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }
}
