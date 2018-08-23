<?
//$test = "Гарри";
$id = 0;
$qwery = implode(" ", array_slice($argv, 1));
$qwery_str = urlencode($qwery);
//$qwery_str = $test;
$file_ad = "books.csv";
$file = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$qwery_str");
$files = json_decode($file, true);
$res = fopen($file_ad, "w+");
foreach ($files as $string) {
    json_decode($string);
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - Ошибок нет';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Достигнута максимальная глубина стека';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Некорректные разряды или несоответствие режимов';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Некорректный управляющий символ';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Синтаксическая ошибка, некорректный JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Некорректные символы UTF-8, возможно неверно закодирован';
        break;
        default:
            echo ' - Неизвестная ошибка';
        break;
    }
    echo PHP_EOL;
};
 foreach ($files["items"] as $key => $value) {
 	$id += 1;
 	$title = $value["volumeInfo"]["title"];
 	$author = $value["volumeInfo"]["authors"][0];
	fwrite($res, $id . "," . $title . ",". $author . "\n");
 }
 fclose($res);
 	echo file_get_contents($file_ad);
?>