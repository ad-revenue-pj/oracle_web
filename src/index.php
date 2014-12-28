<?php
$app = require 'bootstrap.php';

$app->get('/', function () use ($app) {
    echo $app->twig->render('index.html.twig');
});

$app->get('/contents/:parent', function ($parent) use ($app) {
    try {
        echo $app->twig->render('contents-parent.html.twig', array('parent' => $parent));
    } catch (\Exception $e) {
        echo $app->twig->render('notfound.html.twig');
    }
});

$app->get('/contents/:parent/:child', function ($parent, $child) use ($app) {
    try {
        echo $app->twig->render('contents-child.html.twig', array('parent' => $parent, 'child' => $child));
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
