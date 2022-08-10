<?php

declare(strict_types=1);

namespace Guirre\DesignPatterns\Creational\Builder;

use Guirre\DesignPatterns\Creational\Builder\Parts\Vehicule;

interface Builder
{
    public function createVehicule();
    public function addWheel();
    public function addEngine();
    public function addDoor();
    public function getVehicule(): Vehicule;
}
