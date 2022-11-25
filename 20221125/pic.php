<?php
$im = imagecreatetruecolor(400,300);
header("Content-Type: image/png");
imagepng($im);