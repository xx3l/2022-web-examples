<?php
session_start();
if (isset($_POST["user"])) {
	print "Пошли проверять имя пользователя и пароль";
} else {
	print "Пока ничего пользователь не отправил";
	$_SESSION["captcha"] = rand(100000000,999999999);
}
?>

<form method="post">
  <input type="text" placeholder="Имя пользователя" name="user">
  <input type="password" placeholder="Пароль" name="pass">
  <div><img src="captcha.php"></div>
  <input type="text" placeholder="Что там на капче?" name="captcha">
  <input type="submit">
</form>
