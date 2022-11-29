<style>
  .mark {background-color:red; color:white; }
</style>
<?php
$page_size = 1000;
$page = $_GET["p"] ?? 0;
$pos_start = $page * $page_size;
$pos_end = $pos_start + $page_size;

$c = file_get_contents("book2.txt");
$c = "<div>".preg_replace('/\n/', "</div>\n<div>", $c)."</div>";

$part = substr($c, $pos_start, $page_size);
print strpos($c, "\n", 2000);

$part = mb_strtoupper($part);

$pattern = "гриб";
$pos = strpos($part, $pattern);
if ($pos !== false) {
$part = substr($part, 0, $pos).
	'<span class="mark">'.
	substr($part, $pos, strlen($pattern)).
	'</span>'.
	substr($part, $pos + strlen($pattern));
} else {
	print "<h1>Не найдено</h1>";
}
print $part;

?>
<a href="?p=<?=$page-1?>">&lt;&lt;&lt;</a>
<a href="?p=<?=$page+1?>">&gt;&gt;&gt;</a>
<!-- 12343<span class="mark">55</span>675678367346756 -->