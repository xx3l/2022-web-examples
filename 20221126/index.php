<?php

$answers = [
  [1, "ответ 1", true],
  [3, "ответ 2", false],
  [4, "ответ 3", false],
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
