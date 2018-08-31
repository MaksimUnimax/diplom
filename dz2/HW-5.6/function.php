<?
$dir = 'tests';
function GetTest($dir) {
	$list = array_slice(scandir($dir), 2);
	foreach ($list as $numb => $test) {
				$number = $numb + 1;
				$fileName = $list[$numb];
				$fileJs = file_get_contents("tests/$fileName");
			    return json_decode($fileJs,true);
	}
}
$test = GetTest($dir);
foreach ($test as $key => $value) {
	var_dump($value);
}
?>