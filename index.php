<?php

// Fire up the session!
session_cache_limiter(false);
session_start();

// Autoload Slim + Twig
require( "vendor/autoload.php" );

// Load modules + database stuff (and the config)
require( "init.php" );

// initiate the timer!
$timer = new Timer();

// Start slim and load the config from the config file
$app = new \Slim\Slim($config);

// Load the routes - always keep at the bottom of the require list ;)
include( "routes.php" );

// Load twig stuff
include( "twig.php" );

// Run the thing!
$app->run();
