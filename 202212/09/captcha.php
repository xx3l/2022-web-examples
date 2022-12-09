<?php
session_start();
$string = $_SESSION["captcha"] ?? "беда..";
$im = imagecreatetruecolor(300,50);
$white = imagecolorallocatealpha($im,255,255,255,.5);
imagettftext($im, 24, -5, 30, 40, $white, "./comic.ttf", $string);
header("Content-type: image/png");
imagepng($im);