<?php
// Load Twig globals
$app->view(new \Slim\Extras\Views\Twig());
$twig = $app->view()->getEnvironment();

\Slim\Extras\Views\Twig::$twigOptions = array(
    'charset'           => 'utf-8',
    'cache'             => 'cache/templates/',
    'auto_reload'       => true,
    'strict_variables'  => false,
    'autoescape'        => true
);

// Twig functions
$twig->addFunction("pageTimer", new Twig_Function_Function("Util::pageTimer"));