<?php

declare(strict_types=1);

namespace Dupa\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

use function time;

class PingHandler implements RequestHandlerInterface
{

    private $renderer;
	private $parameters;
	private $config;
	private $adapter;
	private $router;

    public function __construct(
			$renderer, 
			$adapter, 
			$config,
			$router)
    {
        $this->renderer = $renderer;
		$this->adapter = $adapter;
        $this->config = $config;
        $this->router = $router;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // return new JsonResponse(['ping dupa:ack' => $this->a." xx ".time()]);
        return new JsonResponse(['ping dupa:ack' => $this->router ]);
    }
}
