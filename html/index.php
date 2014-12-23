<?php
$app = require 'src/bootstrap.php';

$app->get('/', function () use ($app) {
    echo $app->twig->render('index.html.twig');
});

$app->get('/contents', function () use ($app) {
    echo $app->twig->render('contents.html.twig');
});

$app->notFound(function () use ($app) {
    echo '<html><body><h1>ページがみつかりません</h1></body></html>';
});

$app->run();
