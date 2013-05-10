<?php
$app->notFound(function () use ($app) {
    $app->render('404.html');
});

// Default route
$app->map("/", function () use ($app){
    include( "view/index.php" );
})->via("GET", "POST");

$app->get("/:hash/", function ($hash) use ($app){
    include( "view/view.php" );
});