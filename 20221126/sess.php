<?php
session_start();
$action = $_REQUEST["action"] ?? "";
if ($action == "start") {
	$_SESSION["test_started_at"]=date("Y-m-d H:i:s");
	print "Вы поехали!";
}
print ($_SESSION["test_started_at"] ?? "");

?>
<form method="post">
  <input type="hidden" name="action" value="start">
  <input type="submit" value="Поехали">
</form>
<a href="?id=5">Типа какая-то навигация</a>