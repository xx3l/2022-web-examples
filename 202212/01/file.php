<?php
$fn = $_REQUEST["fn"] ?? '$y = 0';
$fn .= ";";
$x = 0.5;
eval($fn);
print $y;
