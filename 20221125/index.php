<?php
$a = [1,2,4,5,6,7];
$test = [];
for ($i=0; $i<5; $i++) {
	$n = rand(0, count($a)-1);
	$test[] = $a[$n];
	array_splice($a, $n, 1);
	print "$n ";
}