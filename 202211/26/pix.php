<?php
$im = imagecreatetruecolor(1000,300);
$c = imagecolorallocatealpha($im, 0, 255, 0, 64);
$c2 = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 5,5,995,295, $c);
imagefilledrectangle($im, 6,6,994,294, $c2);
for($i=0; $i<1000; $i++) {
//  imagesetpixel($im, $i, sin($i/10)*100+150, $c);
  imagefilledrectangle($im, $i, sin($i/10)*100+150, 
    $i+3, sin($i/10)*100+150+3, $c);
}
imagestring($im, 5, 20,20,"hello, ".date("H:i:s"),$c);
header("Content-Type: image/png");
imagepng($im);