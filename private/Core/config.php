<?php

/*set your website title*/

define('WEBSITE_TITLE', "CRUD APP OPP PHP ");

// set your default time-zone
date_default_timezone_set('Africa/Harare');


/*set database variables*/

define('DB_TYPE', 'mysql');
define('DB_NAME', 'schools');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');


/* Email Server Variables */

define('SMTP_USERNAME', 'info@ulwazilonke.co.za');
define('SMTP_PASSWORD', '04011994Flex15$');
define('SECRET_KEY', '04011994Flex15$');



/*protocal type http or https*/
define('PROTOCAL', 'http');

/*root and asset paths*/

$path = str_replace("\\", "/", PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("private/Core", "Public", $path));
// define('ASSETS', str_replace("private/Core", "Public/assets", $path));
define('MAIN_ASSETS', str_replace("private/Core", "Public/assets/main", $path));
define('AUTH_ASSETS', str_replace("private/Core", "Public/assets/auth", $path));
define('BACK_ASSETS', str_replace("private/Core", "Public/assets/backend", $path));
define('ASSETS', str_replace("private/Core", "Public/assets", $path));

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set("display_errors", 0);
}