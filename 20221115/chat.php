<!doctype html>
<html>
<head>
  <meta http-equiv="refresh" content="2">
</head>
<body>
<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$remove_message_id = ($_REQUEST["remove_id"] ?? 0);

if ($remove_message_id > 0) {
//	$conn->query("delete from messages where id=".$remove_message_id);
	$conn->query("update messages set visible=0
	  where id=".$remove_message_id);
}

$result = $conn->query("SELECT id,user,msg FROM messages
  WHERE visible=1
  ORDER BY id desc LIMIT 20");
  
$username = "Buddy";
print "<ul>";
while ($row = $result->fetch_assoc()) {
  print "<li>";
  if ($username == "Buddy") {
    print '<a href="?remove_id='.$row['id'].'">&#x274C;</a>';
  }
  print "{$row['user']} said : {$row['msg']}";
  print "</li>";
}
print "</ul>";
// DELETE FROM table_name WHERE field_name = some_value
?>
</body>
</html>