<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\ExampleMiddleware::class,
    ];

    protected $routeMiddleware = [
        // Other middleware
        'example' => \App\Http\Middleware\ExampleMiddleware::class,
    ];

//    protected $middlewareAliases = [
//        'example' => \App\Http\Middleware\ExampleMiddleware::class,
//    ];
}
