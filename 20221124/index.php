<?php
$questions = [1,2,4,5,7,8,9,10,11];
$a = [];
for($i = 0; $i < 5; $i++) {
	$n = rand(0, count($questions)-1);
	$a[] = $questions[$n];
	array_splice($questions, $n, 1);
}
print json_encode($a);
