<?php

declare(strict_types=1);

use DI\Container;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;

return function (Container $container) {
    $container->set(LoggerInterface::class, function (ContainerInterface $container){
        $loggerSettings = $container->get('settings')['logger'];
        
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    });

    $container->get(LoggerInterface::class)->debug('example', ['context' => 'message']);
};