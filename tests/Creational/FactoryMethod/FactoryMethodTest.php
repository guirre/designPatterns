<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Tests\Creational\FactoryMethod;

use Guirre\DesignPatterns\Creational\FactoryMethod\FileLogger;
use Guirre\DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use Guirre\DesignPatterns\Creational\FactoryMethod\FileLooger;
use Guirre\DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use Guirre\DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging():void
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->log("Bonjour tout le monde \n");
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging():void
    {
        $loggerFactory = new FileLoggerFactory('./logs');
        $logger = $loggerFactory->createLogger();
        $logger->log("Bonjour tout le monde dans un fichier");
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}