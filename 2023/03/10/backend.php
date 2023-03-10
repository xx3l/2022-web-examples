<?php
$v1 = $_REQUEST['v1'] ?? 0;
$v2 = $_REQUEST['v2'] ?? 0;
$a = [
	"v1" => $v1,
	"v2" => $v2,
	"sum" => $v1 + $v2,
	"sub" => $v1 - $v2,
	"mul" => $v1 * $v2,
];
print json_encode($a);