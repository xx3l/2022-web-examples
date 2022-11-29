<?php
session_start();
print_r($_REQUEST);
function generate_set($ids, $n) {
	$result = [];
	// rand(a,b)
	// $result[] = some_value
	// array_splice($array, $index, $how_much_els_you_remove) 
	return $result;
}
// SELECT id FROM quiz_questions
$question_ids = [1,2,3,4,7,8,9,10,12];
$action = $_REQUEST["action"] ?? "";
if ($action == "start") {
	$_SESSION["is_quiz_started"] = true;
	$_SESSION["question"] = generate_set($question_ids, 5);
}
$is_quiz_started = $_SESSION["is_quiz_started"] ?? false;

if (!$is_quiz_started) {
?>
<form method="post">
<input type="hidden" name="action" value="start">
<input type="submit" value="START_QUIZ">
</form>
<?php
} else {
?>
Quiz is started
<?php
}
?>
<img src="img.php">