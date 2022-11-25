<?php
$x = $_GET["x"] ?? 400;
$y = $_GET["y"] ?? 300;
$n = $_GET["n"] ?? 10;
$im = imagecreatetruecolor($x,$y);
while (--$n > 0) {
  $c = imagecolorallocatealpha(
    $im, rand(0,255), rand(0,255), rand(0,255), 64
  );
  imagefilledrectangle($im, 
    rand(0,$x), rand(0,$y), rand(0,$x), rand(0,$y), $c);
}
imagestring($im, 2, 100,200, "Hello, pixel world!",
    imagecolorallocate($im, 255,255,255)
  );
header("Content-Type: image/gif");
imagegif($im);