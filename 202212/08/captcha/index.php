<?php
if (isset($_POST["user"])) {
	print "Пошли проверять имя пользователя и пароль";
} else {
	print "Пока ничего пользователь не отправил";
}
?>

<form method="post">
  <input type="text" placeholder="Имя пользователя" name="user">
  <input type="password" placeholder="Пароль" name="pass">
  <input type="submit">
</form>