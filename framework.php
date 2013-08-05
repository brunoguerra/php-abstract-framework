<?php
require(dirname(__FILE__).'/lib/Site/environment.php');
require(dirname(__FILE__).'/lib/Site/assets.php');


/*
 * Haml render
 **/

$haml = new MtHaml\Environment('php',array('enable_escaper' => false));

function haml_render($template) {
  global $haml, $APP_ROOT;
  $content = $haml->compileString(file_get_contents($template), $template);
  $file_name_cache = $APP_ROOT.'tmp/cache/'.$template.'.php';

  $f = fopen($file_name_cache, "w+"); 
  fwrite($f, $content); 
  fclose($f);

  return $file_name_cache; 
}

function php_render($template) {
  include $template;
}

function render($template) {
  ob_start();
  php_render(haml_render($template));
  return ob_get_clean();
}

/*
 * Sass render
 **/

$sass = new SassParser();

function sass_render($stylesheet) {
  global $sass;
  return $sass->toCss($stylesheet);
}

?>