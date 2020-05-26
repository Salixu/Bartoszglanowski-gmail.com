<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

// $container is application's DIC container.
// Setup Paginator resolvers                                                                                                                                                                                       
Illuminate\Pagination\Paginator::currentPageResolver(function ($pageName = 'page') use ($container) {

    $page = $container->request->getParam($pageName);

    if (filter_var($page, FILTER_VALIDATE_INT) !== false && (int) $page >= 1) {
        return $page;
    }
    return 1;
});
