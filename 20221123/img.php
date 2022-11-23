<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);
$res = $conn->query("select correct,count(id) n from stats group by 1");
$row = [];
while ($row[] = $res->fetch_assoc()) {
	//print_r($row);
}
//print $row[0]['n'];
$im = imagecreatetruecolor(400,350);
$c0 = imagecolorallocate($im, 255, 0, 0);
$c1 = imagecolorallocate($im, 0, 255, 0);
imagefilledrectangle($im, 100,100, 200, 100 + 50*$row[0]['n'], $c0);
imagestring($im, 3, 100, 100, "Hello", $c1);
// Array ( [correct] => 3 [n] => 1 ) Array ( [correct] => 4 [n] => 2 ) Array ( [correct] => 5 [n] => 3 )
header("Content-type: image/png");
imagepng($im);

?>