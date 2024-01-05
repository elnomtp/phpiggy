<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\Middlewareinterface;
use Framework\TemplateEngine;

class FlashMiddleware implements Middlewareinterface
{
  public function __construct(private TemplateEngine $view)
  {
  }
  public function process(callable $next)
  {

    $this->view->addGlobal('errors', $_SESSION['errors'] ?? []);

    unset($_SESSION['errors']);

    $this->view->addGlobal('oldFormData', $_SESSION['oldFormData'] ?? []);

    unset($_SESSION['oldFormData']);

    $next();
  }
}
