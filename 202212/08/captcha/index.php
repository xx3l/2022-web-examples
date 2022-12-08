<?php
session_start();
if (isset($_POST["user"])) {
	$captcha_answer = $_POST["captcha"] ?? "ну не знаю";
	$correct_captcha_answer = $_SESSION["captcha"] ?? "";
	if ($captcha_answer == $correct_captcha_answer) {
		print "Пошли проверять имя пользователя и пароль";
	} else {
		print "Капча не разгадана";
	}
} else {
	print "Пока ничего пользователь не отправил";
//	$_SESSION["captcha"] = rand(100000000,999999999);
	$_SESSION["captcha"] = rand(10,99);
}
?>

<form method="post">
  <input type="text" placeholder="Имя пользователя" name="user">
  <input type="password" placeholder="Пароль" name="pass">
  <div><img src="captcha.php"></div>
  <input type="text" placeholder="Что там на капче?" name="captcha">
  <input type="submit">
</form>
