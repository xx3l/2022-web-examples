<?php
function log_message($str) {
  $log = file_get_contents("log.txt");
  $log .= date("d.m.Y H:i:s")." ".$str."\n";
  file_put_contents("log.txt", $log);
}
$id = $_GET["id"] ?? -1;
if ($id == -1) {
  file_put_contents("n.txt", 20);
  file_put_contents("log.txt", "");
  $n = 20;
} else {
  $n = file_get_contents("n.txt");
}
if ($id >= $n - 3) {
  if ($id < $n) {
    log_message("Сделан ход (".$id.")");
    $n = $id;
  }
  file_put_contents("n.txt", $n);
} else {
  if ($id != -1)
    log_message("Кто-то делал плохой ход (".$id.")");
}

print $n;
?>
<style>
  td {
    background-color: #65f;
    height: 60px;
    width: 5px;
  }
</style>
<table>
<tr>
<?php
for ($i = 0; $i < $n; $i++) {
?>
<td><a href="?id=<?=$i?>"><?=$i?></a></td>
<?php 
}
?>
</tr>
</table>
<pre>
<?=file_get_contents("log.txt")?>
</pre>
