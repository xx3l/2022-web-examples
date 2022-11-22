<?php
session_start();
print_r($_SESSION);
$users = [
  "user" => "pass",
  "123" => "456",
  "test" => "test",
];

$auth = $_SESSION["auth"] ?? false;

$action = $_GET["action"] ?? "";

if ($action == "logoff") {
	$_SESSION["auth"] = false;
	$auth = false;
}

$user = $_POST["username"] ?? "Guest";
$pass = $_POST["password"] ?? "";


if ($user != "Guest") {
	if (isset($users[$user]) && $users[$user] == $pass) { // credentials is ok
		$_SESSION["auth"] = true;
		$auth = true;
	}
}

if (!$auth) {
?>
<form method="post" action="?id=1">
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="submit">
</form>
<?php
} else { // $auth == true
?>
<a href="?action=logoff">Log off</a>
<a href="?id=345">Some secret link on the portal</a>
Secret portal content
<?php
}
?>