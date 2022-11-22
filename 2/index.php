<?php
$template = file_get_contents("index.shablon");
$var1 = "Привет";
$var2 = "Вася";
while (preg_match('/_[0-9a-z]+_/', $template)) {
	preg_match('/_([0-9a-z]+)_/', $template, $match);
	$var_name = $match[1];
	$replace_pattern = $match[0];
	$template = preg_replace('/'.$replace_pattern.'/', $$var_name, $template);
}
print $template;
