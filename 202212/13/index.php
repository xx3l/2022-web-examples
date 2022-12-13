<?php
print_r($_POST);
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