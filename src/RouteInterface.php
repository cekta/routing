<?php
declare(strict_types=1);

namespace Cekta\Routing;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface RouteInterface
{
    public function getHandler(): RequestHandlerInterface;

    /**
     * @return MiddlewareInterface[]
     */
    public function getMiddlewares(): array;

    public function getRequest(): ServerRequestInterface;
}
