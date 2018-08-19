<?
$date = date('Y-m-d');
if ($argc > 1) {
	$file_csv = "money.csv";
	$res = fopen($file_csv , "a+");
		if ((float)$argv[1] != 0 and $argv[1] != "--today") {
			$arr = array_slice($argv, 1, 1);
			$arr2 = array_slice($argv, 2);
			array_push($arr, implode(" ", $arr2));
			array_unshift($arr, $date);
		    fwrite($res, implode(",", $arr)  . "\n");
		    $string = implode(",", $arr);
			echo "Добавлена строка:" . "$string";
		}elseif ((float)$argv[1] == 0 and $argv[1] != "--today") {
			echo "Первым аргументом введите сумму отличную от нуля или флаг --today";
		}
		if ($argv[1] == "--today") {
		 		$data = fgetcsv($res, 1000, ",");
		 		 while($data !== false) {
		 		 	if ($date == $data[0]) {
					$sum += (float)$data[1];
					}	
		 		 	$data = fgetcsv($res, 1000, ",");
				 }echo "$date" ." " . "расход за день: $sum";
		}
		
}else {
	echo "Ошибка! Аргументы не заданы. Укажите флаг --today или запустите скрипт с аргументами {цена} и {описание покупки}";
	exit;
}
fclose($res);
?>