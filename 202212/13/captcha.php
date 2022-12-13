<?php
session_start();
$captcha = $_SESSION["captcha"];
$im=imagecreatetruecolor(100,30);
$yellow = imagecolorallocate($im, 255, 255, 0);
$black = imagecolorallocate($im, 0, 0, 0);
//$captcha = rand(100,999);
imagestring($im, 5, 10, 10, $captcha, $yellow);
imagestring($im, 6, 11, 10, $captcha, $black);
header("Content-Type: image/png");
imagepng($im);