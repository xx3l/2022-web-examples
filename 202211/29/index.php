<?php
session_start();
print_r($_REQUEST);
// SELECT id FROM quiz_questions
$question_ids = [1,2,3,4,7,8,9,10,12];
$action = $_REQUEST["action"] ?? "";
if ($action == "start") {
	$_SESSION["is_quiz_started"] = true;
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