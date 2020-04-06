<?php

return [
    'name' => env('APP_NAME', "Slim simple app"),
    'providers' => [
            \App\Providers\EnvironmentVariablesServiceProvider::class,
            \App\Providers\BladeServiceProvider::class,
            \App\Providers\RouteServiceProvider::class,
            \App\Providers\ErrorMiddlewareServiceProvider::class
    ]
];