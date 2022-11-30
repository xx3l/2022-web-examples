<?php

print md5("JKN)sdfiknsgdSDFG*S)(DF"."Hello");
die();

$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$reg_attempt = ($_REQUEST["reg"] ?? 0) == 1;
$login = $_REQUEST["login"] ?? "";
if ($reg_attempt) {
  $login = $_REQUEST["login"] ?? "";
  $pass = $_REQUEST["pass"] ?? "";
  $name = $_REQUEST["name"] ?? "";
  
  $res = $conn->query("select count(id) from us where login='$login'");
  $match_count = $res->fetch_row()[0];
  if ($match_count == 0) {
	  $pass = md5("JKN)sdfiknsgdSDFG*S)(DF".$pass);
	  $conn->query("insert into us(login,pass,name) 
	    values('$login','$pass','$name')");
  }
} else {
  $res = $conn->query("select pass from us where login='$login'");
  $hash = $res->fetch_row()[0];
  print $hash."<br>".md5("JKN)sdfiknsgdSDFG*S)(DF".$_REQUEST["pass"]);
}


?>
<h1>Войти</h1>
<form method="post">
  <div><input type="text" name="login" placeholder="Имя пользователя"></div>
  <div>
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit">
  </div>
</form>

<hr>
<h1>Регистрация</h1>  
<form method="post">
  <div>
    <input type="text" name="login" placeholder="Имя пользователя">
  </div>
  <div>
    <input type="text" name="pass" placeholder="Пароль">
  </div>
  <div>
    <input type="text" name="name" placeholder="Как по жизни звать?">
  </div>
  <input type="hidden" name="reg" value="1">
  <input type="submit">
</form>