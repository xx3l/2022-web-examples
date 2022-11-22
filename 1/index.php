<?php
require_once('./vendor/autoload.php');
print 123;
$grid1 = [
    [16,  0,  0, 0],
    [ 0, 10, 11,  8],
    [ 0,  6,  7, 12],
    [ 0, 15, 14,  1],
];

$grid2 = [
    [16],
    [ 5],
    [ 9],
    [ 4],
];


$matrix1 = new Matrix\Matrix($grid1);
$matrix2 = new Matrix\Matrix($grid2);
$result = $matrix1->multiply($matrix2)->toArray();
print json_encode($result);
