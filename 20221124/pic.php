<?php
$im = imagecreatetruecolor(800,600);
header("Content-Type: image/jpeg");
$c1 = imagecolorallocatealpha($im, 255, 0, 0, 64);
imagefilledrectangle($im,100,100,200,300,$c1);
imagejpeg($im);