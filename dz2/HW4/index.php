<?

$file_ad = "json.json";
$file_js = file_get_contents("$file_ad");
$file = json_decode($file_js, true);
var_dump($file);
foreach ($file_js as $key => $value) {
	# code...
}
?>