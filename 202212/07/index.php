<?php
print_r($_POST);
if (isset($_POST["answer_id"])) $_POST["answer_id"]++;
print_r($_POST);
?>

<form method="post">
  <input type='radio' name='answer_id' value = '1'>Вариант 1</input>
  <input type='radio' name='answer_id' value = '2'>Вариант 2</input>
  <input type='radio' name='answer_id' value = '3'>Вариант 3</input>
  <input type='radio' name='answer_id' value = '4'>Вариант 4</input>
  <input type='submit'>
</form>