<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);


$message = $_POST["message"] ?? "";
if ($message != "") {
  $user = $_POST["user"] ?? "Дед Пихто";
  $sql = "insert into msg(user,msg) values('$user','$message')";
  $conn->query($sql);
}
?>
<form method="post">
  <input type="text" name="user" value="Петя">
  <input type="text" name="message">
  <input type="submit">
</form>
