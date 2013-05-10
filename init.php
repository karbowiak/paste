<?php
require_once( "config.php" );

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