<?php
$a = [];
for ($i = 0; $i < 5; $i++) {
	$a[$i] = [];
	$a[$i]["numer1"] = rand(1, 20);
	$a[$i]["numer2"] = rand(1, 20);
	$action_array = ["+", "-", "/", "*"];
	$rand_action = $action_array[rand(0, count($action_array))];
	$a[$i]["action"] = $rand_action;
	if ($rand_action == "+")
		$a[$i]["answer"] = $a[$i]["numer1"] + $a[$i]["numer2"];
	if ($rand_action == "-")
		$a[$i]["answer"] = $a[$i]["numer1"] - $a[$i]["numer2"];
	if ($rand_action == "*")
		$a[$i]["answer"] = $a[$i]["numer1"] * $a[$i]["numer2"];
	if ($rand_action == "/")
		$a[$i]["answer"] = $a[$i]["numer1"] / $a[$i]["numer2"];
	
}
print json_encode($a);