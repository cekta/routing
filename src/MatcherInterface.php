<?php
declare(strict_types=1);

namespace Cekta\Routing;

use Psr\Http\Message\ServerRequestInterface;

interface MatcherInterface
{
    public function match(ServerRequestInterface $request): ResultInterface;
}
