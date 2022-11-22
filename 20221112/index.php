<head>
  <meta http-equiv="refresh" content="5">
</head>
<?php
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


$result = $conn->query("select user,message from chatik");

while ($row = $result->fetch_assoc()) {
  print "<div>Как-то раз заходит {$row['user']} и говорит: ";
  print "{$row['message']}</div>";
}
?>
<form method="post">
  <input name="user" type="text" value="Владик">
  <input name="text" type="text">
  <input type="submit" value="Послать!">
</form>