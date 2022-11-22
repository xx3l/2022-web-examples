<head>
  <meta http-equiv="refresh" content="5">
</head>
<?php
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$host = "localhost";
$db = "DB2022_lexx";
$connection = new mysqli($host,$user,$pass,$db);

$msg = $_POST["msg"] ?? "";
if ($msg != "") {
  $sql = "insert into messages (author,message) 
    values ('{$_POST['author']}', '$msg')";
//  print $sql;
  $connection->query($sql);
}

$result = $connection->query("select * from chat order by id desc limit 10");
?>
<ul>
<?php
while ($row = $result->fetch_assoc()) {
  print "<li>";
  print "<b>{$row['user']}</b>";
  print " {$row['message']}";
  print "</li>\n";
}

?>
</ul>