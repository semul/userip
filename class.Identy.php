<?php
	/**
	* USER IP ADDRESS FINDER
	* A SIMPLE PHP CLASS
	*/
	class Identy
	{
		public static function userip(){
		    if (isset($_SERVER)) {
		        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) 
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		        elseif (isset($_SERVER['HTTP_CLIENT_IP'])) 
					$ip = $_SERVER['HTTP_CLIENT_IP'];
		        else $ip = $_SERVER['REMOTE_ADDR'];
		    }else {
		        if (getenv('HTTP_X_FORWARDED_FOR')) 
					$ip = getenv('HTTP_X_FORWARDED_FOR');
		        elseif (getenv('HTTP_CLIENT_IP')) 
					$ip = getenv('HTTP_CLIENT_IP');
		        else $ip = getenv('REMOTE_ADDR');
		    }
			return $ip;
		}
	}
?>
