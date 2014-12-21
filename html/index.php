<?php
$app = require 'src/bootstrap.php';

$app->get('/', function () use ($app) {
    echo $app->twig->render('index.html.twig');
});

$app->run();
