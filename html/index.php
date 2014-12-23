<?php
$app = require 'src/bootstrap.php';

$app->get('/', function () use ($app) {
    echo $app->twig->render('index.html.twig');
});

$app->get('/contents/:title', function ($title) use ($app) {
    try {
        echo $app->twig->render('contents.html.twig', array('title' => $title));
    } catch (\Exception $e) {
        echo $app->twig->render('notfound.html.twig');
    }
});

$app->notFound(function () use ($app) {
    echo $app->twig->render('notfound.html.twig');
});

$app->error(function (\Exception $e) use ($app) {
    echo 'aaaaうあわｗっわっわ';
});

$app->run();
