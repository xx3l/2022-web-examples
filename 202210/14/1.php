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
for ($i = 0; $i < 20; $i++) {
?>
<td><a href="?id=<?=$i?>"><?=$i?></a></td>
<?php 
}
?>
</tr>
</table>
