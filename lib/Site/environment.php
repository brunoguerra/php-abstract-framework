<?php

$APP_ROOT = realpath(dirname(__FILE__).'/../../').'/';

$VENDOR_PATH = $APP_ROOT.'vendor/';

/* Libraries
 */

//MtHaml
use MtHaml\Autoloader;
use MtHaml\Environment;
require_once $VENDOR_PATH.'lib/MtHaml/Autoloader.php';
Autoloader::register();

//PhpSass
require($VENDOR_PATH.'lib/phpsass/SassParser.php');

?>