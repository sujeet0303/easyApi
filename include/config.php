<?php

define('PATH', dirname(dirname(__FILE__)));
define("EXTRA_PATH", '');
define('AUTH_TOKEN', 'ThisIsTestToken');
define('DEBUG', 1);
define('LOG_API_REQUESTS', 1);
define("URL", "http://" . @$_SERVER['SERVER_NAME']. EXTRA_PATH);

// Database details
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define('DB_DATABASE', "ubz");
