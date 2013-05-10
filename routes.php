<?php
$app->notFound(function () use ($app) {
    $app->render('404.html');
});

// Default route
$app->get("/", function () use ($app){
    include( "view/index.php" );
});
$app->post("/", function () use ($app){
    include( "view/index.php" );
});
$app->get("/:hash/", function ($hash) use ($app){
    include( "view/view.php" );
});