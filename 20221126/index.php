<?php

$answers = [
  [1, "ответ 1", true],
  [3, "ответ 2", false],
  [4, "ответ 3", true],
  [5, "ответ 4", true],
  [6, "ответ 5", false],
  [8, "ответ 6", false],
];
$correct = [];
$incorrect = [];
foreach($answers as $answer) {
	if ($answer[2] == true) {
		$correct[] = $answer[0];
	} else {
		$incorrect[] = $answer[0];
	}
}
print_r($correct);
print_r($incorrect);
$pool = [];
$n = rand(0, count($correct)-1);
$pool[] = $correct[$n];
array_splice($correct, $n, 1);
print "-----------\n";
print_r($pool);
print_r($correct);
print "-----------\n";
$a = array_merge($correct, $incorrect);

for($i = 0; $i < 3; $i++) {
	$n = rand(0, count($a)-1);
	$pool[] = $a[$n];
	array_splice($a, $n, 1);
}

print_r($pool);
print "-----------\n";
$a = $pool;
$pool = [];
for($i = 0; $i < 4; $i++) {
	$n = rand(0, count($a)-1);
	$pool[] = $a[$n];
	array_splice($a, $n, 1);
}
print_r($pool);