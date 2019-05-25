<?php
/**
 * This file generated by Zend\Expressive\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via zend-expressive-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Handler\HelloHandler::class => App\Handler\HelloHandlerFactory::class,
            Dupa\Handler\PingHandler::class => Dupa\Handler\PingHandlerFactory::class,
            Sites\Handler\PingHandler::class => Sites\Handler\PingHandlerFactory::class,
        ],
    ],
];
