<?php
session_start();
$string = $_SESSION["captcha"];
$im = imagecreatetruecolor(300,50);
$white = imagecolorallocatealpha($im, 128, 128, 128, 0);
$black = imagecolorallocatealpha($im, 255, 255, 0, 0);
imagettftext($im, 30, 3, 40, 40, $white, "./CENTAUR.TTF", $string);
imagestring($im, 5, 100, 15, $string, $black);
header("Content-Type: image/png");
imagepng($im);