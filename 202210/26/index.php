<head>
</head>
<?php
$c = file_get_contents("1.html");
print substr($c, 10000, 1000);