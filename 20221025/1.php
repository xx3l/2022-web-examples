This is 1.php file
<pre>
<?php
print "Cookies\n";
print_r($_COOKIE);
print "GET params\n";
print_r($_GET);
print "POST params\n";
print_r($_POST);
setcookie("name", "value");
?>
</pre>