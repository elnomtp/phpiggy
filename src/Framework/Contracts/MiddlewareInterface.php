<?php

declare(strict_types=1);

namespace Framework\Contracts;

interface Middlewareinterface
{
  public function process(callable $next);
}
