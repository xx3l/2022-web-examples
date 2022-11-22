<?php
require "1.html";
$users = [
  "test" => "test",
  "123" => "123",
];
$user = $_POST["u"] ?? $_COOKIE["user"] ?? "";
$pass = $_POST["p"] ?? "";
$action = $_GET["action"] ?? "";
if ($action == "logoff") {
  setcookie("auth", "", time() - 3600);
  setcookie("user", "", time() - 3600);
  header("Location: /20221022/");
}

$auth = $_COOKIE["auth"] ?? false;

if ($user != "" && !$auth) {
  if (isset($users[$user]) && $users[$user] == $pass) {
    print "<h3>Правильные данные!</h3>";
    setcookie("auth", true, time() + 60);
    setcookie("user", $user, time() + 60);
    $auth = true;
  } else {
    print "<h3>ALARM!</h3>";
  }
}
print_r($_COOKIE);
?>
<a href="?id=15">Ходить по порталу</a>
<a href="?action=logoff">Выход</a>
<?php
if (!$auth) {
?>
<form method="post" action="?">
  <input type="text" name="u">
  <input type="password" name="p">
  <input type="submit">
</form>
<?php
} else {
?>
<h1>Секретная страница на портале для <?=$user?>
<?php
}
?>