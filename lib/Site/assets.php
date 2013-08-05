<?php



$ASSETS_APP_STLESHEET_PATH = $APP_ROOT.'app/assets/stylesheet/';
$ASSETS_APP_JAVASCRIPT_PATH = $APP_ROOT.'vendor/assets/javascript/';

$ASSETS_STLESHEET_PATH = $APP_ROOT.'vendor/assets/stylesheet/';
$ASSETS_JAVASCRIPT_PATH = $APP_ROOT.'vendor/assets/javascript/';

$ASSETS_VENDOR_PATH =            $APP_ROOT.'vendor/assets/';
$ASSETS_VENDOR_STYLESHEET_PATH = $ASSETS_VENDOR_PATH.'stylesheet/';
$ASSETS_VENDOR_JAVASCRIPT_PATH = $ASSETS_VENDOR_PATH.'javascript/';

$ASSETS_PATHS = array(
   $ASSETS_APP_STLESHEET_PATH 
  ,$ASSETS_APP_JAVASCRIPT_PATH
  ,$ASSETS_STLESHEET_PATH 
  ,$ASSETS_JAVASCRIPT_PATH
  ,$ASSETS_VENDOR_PATH
  ,$ASSETS_VENDOR_STYLESHEET_PATH
  ,$ASSETS_VENDOR_JAVASCRIPT_PATH
);


function asset_include($filename) {
  global $ASSETS_PATHS;
  foreach ($ASSETS_PATHS as $path) {
    if (file_exists($path.$filename)) {
      include $path.$filename;
    }
  }
}

function image_url($url) {
  return "assets/image/$url";
}

?>