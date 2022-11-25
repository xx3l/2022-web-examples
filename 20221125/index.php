<?php
print_r($_REQUEST);
//print_r($_SERVER);
$a = [1,2,4,5,6,7];
$test = [];
for ($i=0; $i<5; $i++) {
	$n = rand(0, count($a)-1);
	$test[] = $a[$n];
	array_splice($a, $n, 1);
}
print json_encode($test);

//select count(id) n from answers
//where id in 11,13,16,17 and correct=1


//select * from answers where id like "%Е-13%" 
//union 
//select * from answers where k < v
?>
<form>
  <input type="radio" name="a" value="1"> 1<br>
  <input type="radio" name="a" value="2"> 2<br>
  <input type="radio" name="a" value="3"> 3<br>
  <input type="radio" name="a" value="4"> 4<br>
  <input type="submit">
</form>
<form method="post">
  <input type="checkbox" name="a[]" value="1"> 1<br>
  <input type="checkbox" name="a[]" value="2"> 2<br>
  <input type="checkbox" name="a[]" value="3"> 3<br>
  <input type="checkbox" name="a[]" value="4"> 4<br>
  <input type="submit">
</form>
<img src="pic.php?a=10&b=20">