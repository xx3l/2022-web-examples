<?php
$action = $_REQUEST["action"] ?? "";
if ($action == "start") {
	print "Вы поехали!";
}
?>
<form method="post">
  <input type="hidden" name="action" value="start">
  <input type="submit" value="Поехали">
</form>
<a href="?id=5">Типа какая-то навигация</a>