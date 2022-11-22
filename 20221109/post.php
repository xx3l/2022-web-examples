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
  $sql = "insert into chat (user,message) 
    values ('{$_POST['author']}', '$msg')";
//  print $sql;
  $connection->query($sql);
}
?>
<form method="post">
  <input type="text" name="author" value="Вася">
  <input type="text" name="msg">
  <input type="submit" value="Отправить">
</form>