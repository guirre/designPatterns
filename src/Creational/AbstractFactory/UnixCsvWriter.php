<?php

declare(strict_types=1);

namespace Guirre\DesignPatterns\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}
