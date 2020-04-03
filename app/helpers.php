<?php

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;

/* Global Helper Functions */

if (!function_exists('view'))
{
    function view(Response $response, $template, $with = []) {
        $cache = __DIR__ .'/../cache';
        $views = __DIR__ .'/../recources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;
    };
}