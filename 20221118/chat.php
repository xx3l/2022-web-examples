<head>
  <meta http-equiv="refresh" content="5">
</head>
<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$result = $conn->query("select user,message 
  from chatik
  order by id desc
  limit 10
  ");

while ($row = $result->fetch_assoc()) {
  print "<div>Как-то раз заходит {$row['user']} и говорит: ";
  print "{$row['message']}</div>";
}
?>