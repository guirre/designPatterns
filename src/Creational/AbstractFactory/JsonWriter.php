<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\AbstractFactory;
interface JsonWriter
{
    public function write(array $data, bool $formatted): string;
}