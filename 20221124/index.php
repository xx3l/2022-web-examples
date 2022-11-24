<?php
$questions = [1,2,4,5,7,8];
$a = [];
for($i = 0; $i < 5; $i++) {
	$n = rand(0, count($questions)-1);
	print "$n ";
}