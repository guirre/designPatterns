<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Tests\Creational\AbstractFactory;

use Guirre\DesignPatterns\Creational\AbstractFactory\CsvWriter;
use Guirre\DesignPatterns\Creational\AbstractFactory\JsonWriter;
use Guirre\DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use Guirre\DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use Guirre\DesignPatterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateJsonWriterOnUnixAndWindows(WriterFactory $writerFactory)
    {
       $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
       $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
   
}
