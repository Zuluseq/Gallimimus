<?php

declare(strict_types=1);

namespace Dupa\Handler;

use Psr\Container\ContainerInterface;

class PingHandlerFactory
{
    public function __invoke(ContainerInterface $container) : PingHandler
    {
        return new PingHandler("dupa2");
    }
}
