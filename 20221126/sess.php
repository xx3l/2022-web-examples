<?php
session_start();
$action = $_REQUEST["action"] ?? "";
if ($action == "start") {
	$_SESSION["test_started_at"]=date("Y-m-d H:i:s");
	$_SESSION["questions_count"] = rand(3,7);
	$_SESSION["current_question"] = 0;
	print "Вы поехали!";
}
if ($action == "next") {
	$_SESSION["current_question"] += 1;
	if ($_SESSION["current_question"] > $_SESSION["questions_count"]) {
		$_SESSION["current_question"] = -1;
		print "Вы закончили тест";
	}
}
print_r($_SESSION);
?>
<form method="post">
  <input type="hidden" name="action" value="start">
  <input type="submit" value="Поехали">
</form>
<a href="?id=5">Типа какая-то навигация</a>
<form method="post">
  <input type="hidden" name="action" value="next">
  <input type="submit" value="Следующий вопрос">
</form>

