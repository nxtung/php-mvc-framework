<?php
return [
    'middlewares' => [
        \App\Middlewares\CorsMiddleware::class,
        \App\Middlewares\AnotherMiddleware::class,
        \App\Middlewares\EchoMiddleware::class
    ]
];