<?php
namespace App\Middlewares;

use Closure;
use Core\Middleware;
use Core\Request;

class AnotherMiddleware extends Middleware
{
    public function handle(Request $request)
    {
        echo "\nAnother Middleware.";
        parent::handle($request);
    }
}