<?php
print_r($_REQUEST);
$fn = $_REQUEST["fn"] ?? "";

$command = ';';
$x = 0.5;
//eval ($command);
//print $y;
?>
<form method="post">
<input type="text" name="fn" value="$y = sin($x)">
<input type="submit" value="Draw a graph">
</form>
<?php
if ($fn != "") {
?>
<img src="file.php?fn=<?=$fn?>">
<?php
}
?>