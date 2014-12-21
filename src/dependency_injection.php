<?php

if (! $app instanceof \Slim\Slim) {
    throw new Exception('Please read after you create the \Slim\Slim object.');
}

// 動いていない
$app->container['log'] = function ($c) {
   $log = new Monolog\Logger('applog');
   $log->pushHandler(new Monolog\Handler\StreamHandler('/var/log/httpd/access_log'), Monolog\Logger::WARNING);
   return $log;
};

$app->container['twig'] = function ($c) {
    $loader = new Twig_Loader_Filesystem('src/templates');
    return new Twig_Environment($loader);
};
