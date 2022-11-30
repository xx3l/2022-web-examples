<?php
$im = imagecreatetruecolor(800,600);
header("Content-Type: image/png");
$n = $_GET["n"] ?? 1;

function random_rect($im, $x, $y) {
  $c1 = imagecolorallocatealpha($im, 
    rand(0,255), rand(0,255), rand(0,255), 64);
  imagefilledrectangle($im,
    rand(0,$x),rand(0,$y),
    rand(0,$x),rand(0,$y),$c1);
}
var_dump($im);
exit();

for ($i = 0; $i < $n; $i++) 
	random_rect($im, 800, 600);

$c1 = imagecolorallocatealpha($im, 
    255, 255, 255, 64);
imagestring($im, 3, 200,200,"Привет, n=$n", imagecolorallocatealpha($im, 
    255, 255, 255, 64));

imagepng($im);