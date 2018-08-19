<?
$count = 0;
$qwery = "гарри";
$file = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$qwery+intitle:&maxResults=2");
$files = json_decode($file, true);
//$files = explode("," , $file);
var_dump($files);
//var_dump($files["items"][0]["volumeInfo"]["title"]);
// foreach ($files as $key => $value) {
// 	$count += 1;
//   	var_dump($value["items"][0]["volumeInfo"]["title"]);
//   	echo $count;
// }


?>