<?php
date_default_timezone_set("UTC");

// Base
$baseFile = __FILE__;
$baseDir = dirname($baseFile) . "/";
$baseUrl = "/";
$baseAddr = "";
chdir($baseDir);

// Slim config
$config = array(
	"templates.path" => $baseDir."templates/",
	"mode" => "production",
	"debug" => true,
	"log.enabled" => false
	);
