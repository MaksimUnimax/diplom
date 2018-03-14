<?php
$dir = 'tests';
$list = scandir($dir);

foreach ($list as $key => $value) {
	echo ++$i . ' ' . $value . '<br/>';
}