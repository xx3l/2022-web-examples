<?php
print_r($_COOKIE);
setcookie("123", "456", time()+1000000, "/", ".webappz.ru");
