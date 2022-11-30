<?php
$im = imagecreatetruecolor(800,600);
header("Content-Type: image/jpeg");
$n = $_GET["n"] ?? 1;
for ($i = 0; $i < $n; $i++) {
  $c1 = imagecolorallocatealpha($im, 
    rand(0,255), rand(0,255), rand(0,255), 64);
  imagefilledrectangle($im,rand(0,800),rand(0,600),
    rand(0,800),rand(0,600),$c1);
}

$c1 = imagecolorallocatealpha($im, 
    255, 255, 255, 64);
imagestring($im, 3, 200,200,"Hello, n=$n", imagecolorallocatealpha($im, 
    255, 255, 255, 64));

imagejpeg($im);