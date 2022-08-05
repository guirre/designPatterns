<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\Builder;

use Guirre\DesignPatterns\Creational\Builder\Parts\Vehicule;

class Director
{
    public function build(Builder $builder) : Vehicule
    {
        $builder->createVehicule();
        $builder->addDoor();
        $builder->addEngine();
        $builder->addWheel();
        return $builder->getVehicule();
    }
}