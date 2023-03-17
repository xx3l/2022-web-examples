<?php
$a = [];
for ($i = 0; $i < 5; $i++) {
	$a[$i] = [];
	$a[$i]["numer1"] = rand(1, 20);
	$a[$i]["numer2"] = rand(1, 20);
	
}
print json_encode($a);