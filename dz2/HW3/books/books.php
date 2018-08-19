<?
$id = 0;
$qwery = implode(" ", array_slice($argv, 1));
$qwery_str = urlencode($qwery);
$file_ad = "books.csv";
$file = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$qwery_str");
$files = json_decode($file, true);
$res = fopen($file_ad, "w+");
 foreach ($files["items"] as $key => $value) {
 	$id += 1;
 	$title = $value["volumeInfo"]["title"];
 	$author = $value["volumeInfo"]["authors"][0];
	fwrite($res, $id . "," . $title . ",". $author . "\n");
 }
 	echo file_get_contents($file_ad);
?>