<?php
function log_msg($msg) {
  global $game_id;
  $log = file_get_contents("/tmp/log.$game_id.txt");
  $log .= date("Y.m.d H:i:s")." ".$msg."\n";
  file_put_contents("/tmp/log.$game_id.txt", $log);
}
$game_id = $_GET["game_id"] ?? "";
$game_id = 0;
$id = $_GET["id"] ?? 0;


if ($id == -1) { // starts new game
  file_put_contents("/tmp/n.$game_id.txt", 20);
  file_put_contents("/tmp/log.$game_id.txt", "");
  $n = 20;
  print "<h1>Starting new game</h1>";
} else { // we continue some current game
  $n = file_get_contents("/tmp/n.$game_id.txt");
  if ($id < $n - 3) { // this is a wrong move!
    log_msg("somebody tried to make wrong move (".$id.")!");
  } else { // correct move!
    if ($id < $n) {
      $n = $id;
	  file_put_contents("/tmp/n.$game_id.txt", $n);
	  log_msg("correct move (".$id.")");
	}
  }
}
?>
<style>
  td { 
    height: 90px; width: 5px; 
    background-color: #ccc; 
  }
</style>
<a href="?id=0&game_id=<?=rand(0,1000000000)?>">Start from beginning</a>
<table>
<tr>
<?php
for ($i = 0; $i < $n; $i++) {
?>
<td><a href="?id=<?=$i?>&game_id=<?=$game_id?>"><?=$i?></a></td>
<?php
}
?>
</tr>
</table>
<pre><?=file_get_contents("/tmp/log.$game_id.txt")?></pre>