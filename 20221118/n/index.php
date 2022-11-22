<?php
print_r($_REQUEST);
$host = "localhost";
$user = "DB2022_lexx";
$pass = "DB2022_lexx";
$db = "DB2022_lexx";
$conn = new mysqli($host, $user, $pass, $db);

$add = ($_REQUEST["action"] ?? "") == "add";
$update = ($_REQUEST["content"] ?? "") != "";
$remove = ($_REQUEST["rid"] ?? 0) != 0;
if ($update) {
	$id = $_REQUEST["id"] ?? 0;
	$content = $_REQUEST["content"] ?? "";
	$conn->query("update notes set content='$content' where id=$id");
}
if ($remove) {
	$id = $_REQUEST["rid"] ?? 0;
	$conn->query("delete from notes where id=$id");
}
if ($add) {
	$content = $_REQUEST["content"] ?? "";
	$conn->query("insert into notes (name,content) values ('$content','')");
}
?>
<style>
  .notes {
	vertical-align: top;
  }
  .note { 
    border: 1px #000 solid; 
    margin: 2px;
	padding: 5px;
	
	border-right-style: none;
  }
  .content {
	vertical-align: top;
    border: 1px #000 solid;
	padding: 5px;

  }
</style>
<table width="100%">
  <tr>
    <td width="20%" class="notes">
<?php

$result = $conn->query("select id,name from notes");
while ($row = $result->fetch_assoc()) {
?>
<div class="note">
  <a href="?id=<?=$row["id"]?>">
    <?=$row["name"]?>
  </a>
  <a href="?rid=<?=$row["id"]?>">
    &#x274c;
  </a>
</div>
<?php
}
?>
      <form method="post">
	    <input type="submit" value="+" >
	    <input type="text" name="content" placeholder="Создать новую">
	    <input type="hidden" name="action" value="add">
	  </form>
    </td>
    <td class="content">
<?php
  $note_id = $_REQUEST["id"] ?? 0;
  $result = $conn->query("select content from notes where id=".$note_id);
  print '<form method="post">';
  print '<input type="hidden" name="id" value="'.$note_id.'">';
  print '<textarea cols="70" rows="25" name="content">';
  print $result->fetch_row()[0] ?? "Нет содержимого";
  print '</textarea>';
  print '<input type="submit" value="Сохранить">';
  print '</form>';
?>
    </td>
	</tr>
</table>