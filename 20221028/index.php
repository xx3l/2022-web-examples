<style>
	.y { background-color: yellow; }
</style>
<?php
session_start();
$c = file_get_contents("book.txt");
$fragment = substr($c, 0, 3000);

$search = "со";
$offset = 0;
$fragment_lower = mb_strtolower($fragment);
$search_lower = strtolower($search);

/*
while (($n = strpos($fragment_lower, $search_lower, $offset))!== false) {
	print $n."=";
	$fragment_lower = substr($fragment_lower, 0, $n).
		'<span class="y">'.
		substr($fragment_lower, $n, strlen($search_lower)).
		'</span>'.
		substr($fragment_lower, $n + strlen($search_lower));

	$fragment = substr($fragment, 0, $n).
		'<span class="y">'.
		substr($fragment, $n, strlen($search)).
		'</span>'.
		substr($fragment, $n + strlen($search));

	$offset = $n + strlen($search_lower) + 16;
}
print $fragment;
*/

$fragment = preg_replace("/(Со)/iu", '<span class="y">$1</span>', $fragment);
print $fragment;

$query = $_POST["q"] ?? "";
$page = $_GET["page"] ?? 0;
//$q = [];
//$q[1] = $_COOKIE["q1"] ?? "";
//$q[2] = $_COOKIE["q2"] ?? "";
//$q[3] = $_COOKIE["q3"] ?? "";
//$q[4] = $_COOKIE["q4"] ?? "";
//$q[5] = $_COOKIE["q5"] ?? "";
//if ($query != "") {
//	for($i=5; $i>1; $i--)
//		$q[$i] = $q[$i-1];
//	$q[1] = $query;
//	for($i=1; $i<=5; $i++)
//		setcookie("q".$i, $q[$i]);
//}
if (!isset($_SESSION["history"]))
	$_SESSION["history"] = [];
if ($query != "")
	$_SESSION["history"][] = $query;
//print_r($_SESSION);
?>
<form method="post">
  <input type="text" name="q" value="<?=$query?>">
  <input type="submit" value="Искать">
</form>

<form>
  <input type="hidden" name="page" value="<?=$page-1?>">
  <input type="submit" value="Предыдущая страница">
</form>
<form>
  <input type="hidden" name="page" value="<?=$page+1?>">
  <input type="submit" value="Следующая страница">
</form>
<a href="?page=<?=$page-1?>">Предыдущая страница</a> |
<a href="?page=<?=$page+1?>">Следующая страница</a>
