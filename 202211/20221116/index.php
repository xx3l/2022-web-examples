<?php
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$host = "localhost";
$db_name = "DB2022_lexx";
$db = new mysqli($host,$user,$pass,$db_name);

$current_folder_id = $_GET["fid"] ?? 0;
$file_id = $_GET["id"] ?? 0;
?>
<style>
  .file { width:100%; }
</style>
<?php
$folders = [];
$res = $db->query("select * from folders where parent_id={$current_folder_id}");
while ($row = $res->fetch_assoc()) {
  $folders[] = $row;
}

$files = [];
$res = $db->query("select * from files where folder_id={$current_folder_id}");
while ($row = $res->fetch_assoc()) {
  $files[] = $row;
}
if ($current_folder_id != 0) {
  $res = $db->query("select * from folders where id={$current_folder_id}");
  $row = $res->fetch_assoc();
?>
<div>&#x1F4C1; <a href="?fid=<?=$row['parent_id']?>">...</a> </div>
<?php
}
foreach($folders as $folder) {
?>
<div>
&#x1F4C1; <a href="?fid=<?=$folder['id']?>"><?=$folder['name']?></a>
</div>
<?php
}
?>
<hr>
<table class="file">
<tr>
<td width="10%">
<?php
foreach($files as $file) {
?>
<div>
&#x1F5CE; 
  <a href="?fid=<?=$current_folder_id?>&id=<?=$file["id"]?>">
    <?=$file['name']?>
  </a>
</div>
<?php
}
?>
</td>
<td>
<?php

if ($file_id != 0) {
  $res = $db->query("select content from files where id={$file_id}");
  $row = $res->fetch_row();
  print $row[0];
}
?>
</td>
</tr>
</table>