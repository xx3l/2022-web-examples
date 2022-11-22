<!doctype html>
<html>
<body>
<?php
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$message = $_REQUEST["message"] ?? "";
if ($message != "") {
  $user = $_REQUEST["user"];
  $timestamp = date("Y-m-d H:i:s");
  $sql = "INSERT INTO messages (user, msg, timestamp) 
    VALUES ('$user','$message','$timestamp')";
  $conn->query($sql);
}
?>
<form method="post">
  <input type="text" name="user">
  <input type="text" name="message">
  <input type="submit">
</form>
</body>
</html>