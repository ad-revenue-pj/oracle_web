<?php

//require 'Slim/Slim.php';
require 'vendor/autoload.php';

use Slim\Slim as Application;

Application::registerAutoLoader();

/*
$app = new Application(array(
    'debug' => false,
    'log.enabled' => true,
    'log.level' => \Slim\Log::DEBUG,
    'log.filepath' => '/var/log/httpd/access_log',
    'templates.path' => '/var/www/html/templates',
));
 */
$app = new Application();

//require __DIR__.DIRECTORY_SEPARATOR.'dependency_injection.php';
require 'dependency_injection.php';

/*
$app->log->setWriter($app->log);
$app->hook('slim.after', function () use ($app) {
    $app->log->info("path={path}, status={status}",
        array(
            "path" => $app->request->getPath(),
            "status" => $app->response->getStatus()
        ));
});

$app->view($app->view);
 */

return $app;
