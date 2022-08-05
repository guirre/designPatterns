<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\FactoryMethod;
interface LoggerFactory
{
    public function createLogger(): Logger;
}