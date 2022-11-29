<?php
$im = imagecreatetruecolor(500, 300);
//header("Content-Type: image/gif");
for($i=0; $i<100; $i++) {
  $col = imagecolorallocatealpha($im,
     rand(0,255), rand(0,255), rand(0,255), 
	 64);
  imagefilledrectangle($im, rand(0,500),rand(0,300),
     rand(0,500),rand(0,300), $col);
}

//imagepng($im);