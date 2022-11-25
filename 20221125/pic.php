<?php
$n = $_GET["n"] ?? 0;
$m = $_GET["m"] ?? 0;
$im = imagecreatetruecolor(400,300);
$c = imagecolorallocatealpha($im, 255, 16, 64, 64);
imagefilledrectangle($im, $n, $n, $m, $m, $c);
header("Content-Type: image/png");
imagepng($im);