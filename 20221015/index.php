<?php
print_r($_GET);
$a = $_GET["a"] ?? "";
?>
<form>
<input type="text" name="a" value="<?=$a?>">
<input type="submit">
</form>