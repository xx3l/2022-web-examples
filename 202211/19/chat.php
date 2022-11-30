<head>
  <meta http-equiv="refresh" content="5">
  <style>
    form { display: contents; }
  </style>
</head>
<?php
print_r($_REQUEST);
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$result = $conn->query("
  select
    id,  
    user,
	message 
  from chatik 
  order by id desc 
  limit 15");

while ($row = $result->fetch_assoc()) {
  print "<div>";
  if ($row["user"] == "Петя") {
?>
<form method="post">
  <input type="hidden" name="action" value="delete_msg">
  <input type="hidden" name="id" value="<?=$row['id']?>">
  <input type="submit" value="&#x274c;"> 
</form>
<?php
  }
  print "Как-то раз заходит {$row['user']} и говорит: ";
  print "{$row['message']}</div>";
}
?>