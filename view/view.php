<?php
$text = Gesh::get($hash);
if(!isset($text))
    $app->render("404.html");
else
    $app->render("view.html", array("text" => $text));

