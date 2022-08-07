<?php

declare(strict_types=1);

namespace Guirre\DesignPatterns\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory
{
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }
    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}
