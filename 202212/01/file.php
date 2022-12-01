<?php
$fn = $_REQUEST["fn"] ?? '$y = 0';
$fn .= ";";
//$x = 1;
//eval($fn);
//print $y;
//die($fn);
$im = imagecreatetruecolor(1000, 300);

$col_graph = imagecolorallocatealpha($im, 255, 255, 255, 64);
for($x = -5; $x <= 5; $x += 0.01) {
	eval($fn);
	$scr_x = $x * 100 + 500;
	$scr_y = -$y * 100 + 150;
	imagesetpixel($im, $scr_x, $scr_y, $col_graph);
}
header("Content-Type: image/png");
imagepng($im);
