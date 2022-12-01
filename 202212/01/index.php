<?php
print_r($_REQUEST);
$fn = $_REQUEST["fn"] ?? "";
?>
<form method="post">
<input type="text" name="fn" value="<?=$fn?>">
<input type="submit" value="Draw a graph">
</form>
<?php
if ($fn != "") {
?>
<img src="file.php?fn=<?=$fn?>">
<?php
}
?>