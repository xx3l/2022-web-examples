<?php
session_start();
print_r($_POST);
?>
<form method="post">
  <div>
    Введите старый пароль
    <input type="password" name="old_pw">
  </div>
  <div>
    Введите новый пароль
    <input type="password" name="new_p1">
  </div>
  <div>
    <img src="captcha.php"><br/>
    <input type="text" name="captcha">
  </div>
  
  <input type="submit" value="сменить пароль">
</form>