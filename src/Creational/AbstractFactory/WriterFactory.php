<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\AbstractFactory;

interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter() : JsonWriter;

}