<?php

declare(strict_types=1);

namespace Guirre\DesignPatterns\Creational\Builder;

use Guirre\DesignPatterns\Creational\Builder\Parts\Car;
use Guirre\DesignPatterns\Creational\Builder\Parts\Door;
use Guirre\DesignPatterns\Creational\Builder\Parts\Engine;
use Guirre\DesignPatterns\Creational\Builder\Parts\Vehicule;
use Guirre\DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;
    public function createVehicule()
    {
        $this->car = new Car();
    }
    public function getVehicule(): Vehicule
    {
        return $this->car;
    }
    public function addDoor()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('truckLid', new Door());
    }
    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }
    public function addWheel()
    {
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRB', new Wheel());
        $this->car->setPart('wheelLB', new Wheel());
    }
}
