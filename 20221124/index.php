<?php
print_r($_REQUEST);
$questions = [1,2,4,5,7,8,9,10,11];
$a = [];
for($i = 0; $i < 5; $i++) {
	$n = rand(0, count($questions)-1);
	$a[] = $questions[$n];
	array_splice($questions, $n, 1);
}
print json_encode($a);
?>
<form>
  <input type="radio" name="a" value="1">slkdfj
  <input type="radio" name="a" value="2"> asjhd fhljasdf 
  <input type="radio" name="b" value="3"> asjhd fhljasdf 
  <input type="radio" name="b" value="4"> asjhd fhljasdf 
  <input type="submit">
</form>
\<form method="POST">
  <input type="checkbox" name="a" value="1">slkdfj
  <input type="checkbox" name="b" value="2"> asjhd fhljasdf 
  <input type="checkbox" name="c" value="3"> asjhd fhljasdf 
  <input type="submit">
</form>