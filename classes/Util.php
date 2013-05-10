<?php
class Util
{
	public static function pageTimer() {
		global $timer;
		return $timer->stop();
	}
}
