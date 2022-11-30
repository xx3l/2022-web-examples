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
$message = htmlentities($message);
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
<?php
// CSS inject
//<style> body { background-color: #000; } </style>
//<style> body { display: none; } </style>
// JS injections
// <script> document.location="https://irk.ru"</script>
// <script> for (el of document.querySelectorAll("li")) { el.innerHTML = el.innerHTML.split("").reverse().join("")} </script>