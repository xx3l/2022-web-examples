<?php
$im = imagecreatetruecolor(500, 300);
header("Content-Type: image/jpeg");
imagejpeg($im);