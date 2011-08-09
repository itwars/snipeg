<?php

$css = array(
	'reset.less',
	'typography.less',
	'style.less'
);

$output = '';

foreach($css AS $filename) {
	$output .= file_get_contents($filename);
}

header('Content-type: text/css; charset=utf-8');

echo str_replace(': ', ':', str_replace(array("\n", "\t"), '', $output));