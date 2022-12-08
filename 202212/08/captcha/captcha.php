<?php
session_start();
$string = $_SESSION["captcha"];
$im = imagecreatetruecolor(300,50);
$color = imagecolorallocatealpha($im, 255, 255, 255, 0);
imagestring($im, 5, 0, 0, $string, $color);
imagettftext($im, 18, 3, 0, 0, $color, "CENTAUR.TTF", $string);
//header("Content-Type: image/png");
imagepng($im);