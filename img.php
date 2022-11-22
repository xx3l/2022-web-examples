<?php
$im = imagecreatetruecolor(400, 200);
$c_red = imagecolorallocate($im, 255, 0, 0);
$c_white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 400, 200, $c_white);
imagefilledrectangle($im, 10, 20, 40, 100, $c_red);
$str = "12323423423432";
for ($i = 0; $i < strlen($str); ++$i) {
  $char = substr($str, $i, 1);
  imagestring($im, 4, 150 + $i*10, 140 + rand(-20, 20), $char, $c_red);
}
header("content-type: image/png");
imagepng($im);