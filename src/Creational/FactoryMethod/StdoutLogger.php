<?php declare(strict_types=1);
namespace Guirre\DesignPatterns\Creational\FactoryMethod;
class StdoutLogger  implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
