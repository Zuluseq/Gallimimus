<?php

declare(strict_types=1);

namespace Dupa\Handler;

use Psr\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\Expressive\Plates\PlatesRenderer;

class PingHandlerFactory
{
    public function __invoke(ContainerInterface $container) : PingHandler
    {
		$config = $container->get('config');

        $router   = $container->get(RouterInterface::class);
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

	// $renderer = new PlatesRenderer();
	// $template = $renderer;
	// $template = $container->get(TemplateRendererInterface::class);

      return new PingHandler(
				$template,
				$container->get(AdapterInterface::class),
				$config,
				$router
		);
    }
}
