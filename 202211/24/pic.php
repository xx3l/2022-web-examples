<?php
$im = imagecreatetruecolor(800,600);
//header("Content-Type: image/png");
$n = $_GET["n"] ?? 1;

//$a = (object)["a" => 5, "b"=>[1,2]];

//print $a->a;

var_dump((strpos("hello","h") == false));

die();

function random_rect(object $im, int $x, int $y) : string|int {
	print "draw rect";
	$c1 = imagecolorallocatealpha($im, 
		rand(0,255), rand(0,255), rand(0,255), 64);
	imagefilledrectangle($im,
		rand(0,$x),rand(0,$y),
		rand(0,$x),rand(0,$y),$c1);
	return [];
}

for ($i = 0; $i < $n; $i++) 
	random_rect($im, 800, 600);

$c1 = imagecolorallocatealpha($im, 
    255, 255, 255, 64);
imagestring($im, 3, 200,200,"Привет, n=$n", imagecolorallocatealpha($im, 
    255, 255, 255, 64));

//imagepng($im);