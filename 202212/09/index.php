<?php
session_start();
if (!isset($_SESSION["captcha"])) {
	$_SESSION["captcha"] = rand(10000, 99999);
}
$captcha_user = $_POST["captcha"] ?? "-";
$captcha_real = $_SESSION["captcha"] ?? "--";
if ($captcha_user == $captcha_real) {
	print "Вот теперь проверяем иям и пароль";
} else {
	print "ничего не проверяем";
}
print_r($_POST);
?>
<form method="post">
  <div>
    Введите старый пароль
    <input type="password" name="old_pw">
  </div>
  <div>
    Введите новый пароль
    <input type="password" name="new_p1">
  </div>
  <div>
    <img src="captcha.php"><br/>
    <input type="text" name="captcha">
  </div>
  
  <input type="submit" value="сменить пароль">
</form>