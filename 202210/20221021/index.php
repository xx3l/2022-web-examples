<?php
print_r($_COOKIE);
$action = $_GET["action"] ?? "";
if ($action == "logoff") {
  setcookie("secret_auth", "", time() - 3600);
  header("Location: /20221021/");
  die();
}
$users = [
  "user" => "pass",
  "test" => "test",
];
$username = $_POST["u"] ?? "";
$password = $_POST["p"] ?? "";
$auth = $_COOKIE["secret_auth"] ?? false;
if ($username != "") {
  if ($users[$username] == $password) { // ура, это он!
    print "<h3>Добро пожаловать, $username!</h3>";
    $auth = true;
    setcookie("secret_auth", true, time() + 120);
  } else { // неверный пароль!
    print "<h3>Иди прочь, хакер!</h3>";
  }
}
?>
<a href="?">На главную</a>
<a href="?action=logoff">Выйти</a>
<?php
if (!$auth) {
?>
<form method="post" action="?u=12&b=4">
  <input type="text" name="u">
  <input type="password" name="p">
  <input type="submit">
</form>
<?php
} else {
?>
<h1>суперсекретный портал</h1>
<?php
}