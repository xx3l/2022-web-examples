<?php
$a = [ 1,2.1,3,42,
  "some string", 
  [3,2,1], 
  "key" => "value", 
  "another_key" => [3,4.5,5]
];
$serialized_array = json_encode($a);
//print $serialized_array;
//print "\n";
//print serialize($a);
///print "\n";
//print 0.1+0.2;
$unserialized_string = json_decode($serialized_array);
//print_r($unserialized_string);
//print_r($unserialized_string->another_key);

$serialized_array = '{"0":1,"1":2.1,"2":3,"3":42,"4":"some string","5":[3,2,1],"key":"value","another_key":[3,4.5,5],"ggg":5}';
$unserialized_string = json_decode($serialized_array);

print_r($unserialized_string);
print_r($unserialized_string->ggg);
