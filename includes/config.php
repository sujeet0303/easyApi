<?php

//ob_start();
session_start();

$session = &$_SESSION;
// 1= debug mode 0= production mode
if(!defined("DEBUG"))
	define("DEBUG", 1);

// local path of web root
if (!defined("PATH"))
	define("PATH", dirname(dirname(__FILE__)));

// extra path of project from web root
if (!defined("EXTRA_PATH"))
	define("EXTRA_PATH", '');


// URL of web root
if (!defined("URL"))
	define("URL", "http://" . @$_SERVER['SERVER_NAME']. EXTRA_PATH);


/*
	RDBMS PARAMETERS DEFINED HERE
*/

if (!defined("DB_HOST"))
	define("DB_HOST", "localhost");						// database host   (or ip like 192.168.0.1)
if (!defined("DB_USERNAME"))
	define("DB_USERNAME", "u438326510_suj"); 						// Database user
if (!defined("DB_PASSWORD"))
	define("DB_PASSWORD", "sujit187");							// Database Password
if (!defined('DB_DATABASE'))
	define('DB_DATABASE', "u438326510_groc"); 					// Database name

/*$pos=strpos(urldecode($_SERVER['REQUEST_URI']),"'");
if(!empty($pos))
{
   header('location:'.URL.'/InvalidUrl.php');
}*/