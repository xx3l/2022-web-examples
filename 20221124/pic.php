<?php
$im = imagecreate(800,600);
header("Content-Type: image/jpeg");
imagejpeg($im);