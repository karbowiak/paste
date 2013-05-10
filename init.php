<?php
// Load the config
require_once( "config.php" );

// Load the vendor stuff
require( "vendor/autoload.php" );

spl_autoload_register("zfautoload");

function zfautoload($class_name)
{
	$baseDir = dirname(__FILE__);
	$fileName = "$baseDir/classes/$class_name.php";
	if (file_exists($fileName))
	{
		require_once $fileName;
		return;
	}
}