<?php
$im = imagecreatetruecolor(1000,300);
header("Content-Type: image/jpeg");
imagejpeg($im);