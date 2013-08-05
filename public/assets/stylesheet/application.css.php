<?php header('Content-type: text/css'); ?>
<?php

require('../../../framework.php');
echo asset_include('bootstrap.css');
echo asset_include('bootstrap-glyphicons.css');
echo sass_render('big-carousel.sass');

?>