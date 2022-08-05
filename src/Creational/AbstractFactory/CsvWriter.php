<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\AbstractFactory;;
interface CsvWriter
{
    public function write(array $line): string;
}