<?php
namespace App\Middlewares;

use Closure;
use Core\Middleware;
use Core\Request;

class EchoMiddleware extends Middleware
{
    public function handle(Request $request)
    {
        echo "\nThis is echo middleware.";
        parent::handle($request);
    }
}