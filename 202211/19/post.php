<?php
setcookie("вася", "привет");
print_r($_COOKIE);
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$message = $_POST["text"] ?? "";
if ($message != "") {
  $user = $_POST["user"] ?? "Guest";
  $conn->query("insert into chatik (user,message) 
    values('$user','$message')");
}
?>
<form method="post">
  <input name="user" type="text" value="Владик">
  <input name="text" type="text">
  <input type="submit" value="Послать!">
</form>
<?php
//print json_encode("Всем привет! Hello");
print urlencode("Всем привет! Hello");