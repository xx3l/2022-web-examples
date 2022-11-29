<head>
  <meta http-equiv="refresh" content="5">
</head>
<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$result = $conn->query("select * from msg order by id desc limit 10");
while ($row = $result->fetch_assoc()) {
  print "<span class='name' title='{$row["id"]}'>";
  print "{$row['user']}</span> ";
  print "говорит: {$row['msg']}<br>";
}
?>

<style>
  .name { font-weight: bold; color: blue; }
</style>