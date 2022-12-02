<?php
$fn = $_REQUEST["fn"] ?? '$y = 0';
$fn .= ";";
//$x = 1;
//eval($fn);
//print $y;
//die($fn);
$im = imagecreatetruecolor(1000, 300);

$col_graph = imagecolorallocatealpha($im, 255, 255, 255, 64);
for($x = -50; $x <= 50; $x += 0.01) {
	eval($fn);
	$scr_x = $x * 10 + 500;
	$scr_y = -$y * 10 + 150;
	imagefilledrectangle($im, 
	  $scr_x, $scr_y, $scr_x+2, $scr_y+2, 
	  $col_graph);
}
header("Content-Type: image/png");
imagepng($im);
