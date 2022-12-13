<?php
session_start();
if (!isset($_SESSION["captcha"])) {
  $_SESSION["captcha"] = rand(100,999);
}
if (isset($_POST["pass"]) && $_POST["pass"] != "") {
	if ($_POST["captcha"] == $_SESSION["captcha"]) {
      print "Try to change password";
	} else {
      print "Captcha is not solved!";
	}
}
print_r($_POST);
print_r($_SESSION);
?>
<form method="post">
  <div>
    <input type="password" name="pass" 
      placeholder="Enter new pass here">
  </div>
  <img src="captcha.php">
  <div>
    <input type="text" name="captcha">
  </div>
  <div>
    <input type="submit" value="change password">
  </div>
</form>