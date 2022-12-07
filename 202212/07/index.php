<?php
session_start();
if (!isset($_SESSION["current_question"]) || ($_POST["action"] ?? "") == "restart") {
	$_SESSION["current_question"] = 0;
}
$q = [
  [1=>1, 2=>2, 3=>3, 4=>4],
  [1=>5, 2=>6, 3=>3, 4=>4],
  [1=>7, 2=>8, 3=>3, 4=>4],
  [1=>9, 2=>10, 3=>3, 4=>4],
  [1=>11, 2=>12, 3=>3, 4=>4],
];
print_r($_POST);
if (isset($_POST["answer_id"])) {
	$_SESSION["current_question"]++;
	$_POST["answer_id"]++;
}
print_r($_POST);
?>
<div>
Текущий вопрос: <?=$_SESSION["current_question"]?>
</div>

<form method="post">
  <input type='hidden' name="action" value="restart">
  <input type='submit' value="Перезапустить">
</form>
<form method="post">
<?php
foreach ($q[$_SESSION["current_question"]] as $k => $v) {
?>
  <input type='radio' name='answer_id' value = '<?=$v?>'>Вариант <?=$v?></input>
<?php
}  
?>
  
  <input type='submit'>
</form>