<?php
declare(strict_types=1);

namespace Cekta\Routing;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface ResultInterface
{
    public function getHandler(): RequestHandlerInterface;

    /**
     * @return MiddlewareInterface[]
     */
    public function getMiddlewares(): array;

    public function getAttributes(): array;
}
