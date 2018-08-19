<?
$file_ad = "data-20180609T0649-structure-20180609T0649 (1).csv";
$res = fopen($file_ad, "r");
$data = fgetcsv($res, 1000, ",");
while ($data !== false) {
	foreach ($data as $value) {
		if ($argv[1] == $value) {
			echo "$argv[1]" . ":" . "$data[4]";
		}
	}
 	$data = fgetcsv($res, 1000, ",");
}

?>