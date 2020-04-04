<?php

/**
 * Autoload global dependencies and allow for auto-loading local dependencies via use
 */
require __DIR__ .'/../vendor/autoload.php';

/**
 * Boot up application
 */
$app = require '../bootstrap/app.php';

/**
 * Passing our Request through the app
 */
$app->run();