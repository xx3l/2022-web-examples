<?php
$data = [
  "маша ела кашу",
  "мама мыла раму",
  "рама краснел от сраму",
];
$q = $_POST["q"] ?? "";
$result = [];
if ($q != "") {
	foreach($data as $el) {
		$pos = strpos($el, $q);
		if ($pos !== false) {
		  $result[] = $el;
		}
	}
}

?>
<!doctype html>
<html>
<head>
<style>
  input.q { width: 60%; }
  .center { text-align: center; }
</style>
</head>
<body>
<div class="center">
  <form method="post">
    <input type="text" class="q" name="q" value="<?=$q?>">
    <input type="submit" value="Искать">
  </form>
</div>
<ul>
<?php
foreach($result as $el) {
  print "<li>$el</li>";
}
?>
</ul>
</body>
</html>