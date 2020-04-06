<?php

return [
    'name' => env('APP_NAME', "Slim simple app"),
    'providers' => [
            \App\Providers\BladeServiceProvider::class,
            \App\Providers\RouteServiceProvider::class
    ]
];