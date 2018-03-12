<?php
$dir = 'tests';
$list = scandir($dir);
$i = 0;
foreach ($list as $key => $value) {
	echo ++$i . ' ' . $value . '<br/>';
}