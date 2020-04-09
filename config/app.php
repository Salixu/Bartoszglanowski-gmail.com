<?php

return [
    'name' => env('APP_NAME', "Slim simple app"),
    'providers' => [
            \App\Providers\DatabaseServiceProvider::class,
            \App\Providers\BladeServiceProvider::class,
            \App\Providers\RouteServiceProvider::class
    ],
    'aliases' => [
        'DB' => \Illuminate\Database\Capsule\Manager::class
    ]
];