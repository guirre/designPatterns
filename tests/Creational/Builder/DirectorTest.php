<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Tests\Creational\Builder;

use Guirre\DesignPatterns\Creational\Builder\CarBuilder;
use Guirre\DesignPatterns\Creational\Builder\Director;
use Guirre\DesignPatterns\Creational\Builder\Parts\Car;
use Guirre\DesignPatterns\Creational\Builder\Parts\Truck;
use Guirre\DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruct():void
    {
        $director = new Director();
        $newVehicule = $director->build(new TruckBuilder());
        $this->assertInstanceOf(Truck::class, $newVehicule);
    }

    public function testCanBuildCar(): void
    {
        $director = new Director();
        $newVehicule = $director->build(new CarBuilder());
        $this->assertInstanceOf(Car::class, $newVehicule);
    }
}
