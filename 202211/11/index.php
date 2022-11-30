<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$dbname = "DB2022_lexx";

$db = new mysqli($host, $user, $pass, $dbname);

$message = $_POST["message"] ?? "";
if ($message != "") {
  $user = $_POST["user"] ?? "Дед Пихто";
  $sql = "insert into chat (user,message) 
    values('$user','$message')";
  $db->query($sql);
}


$result = $db->query("select user,message from chat");

while ($row = $result->fetch_assoc()) {
  print "<div>Тут {$row['user']} и говорит: ";
  print "{$row["message"]}</div>";
}
?>
<head>
  <meta http-equiv="refresh" content="5">
</head>
<form method="post">
  <input type="text" name="user" value="Петя">
  <input type="text" name="message" value="">
  <input type="submit" value="Написать в чатик">
</form>