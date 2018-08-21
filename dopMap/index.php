<?

$adres = urlencode($_GET["adress"]);
$file = file_get_contents("https://geocode-maps.yandex.ru/1.x/?format=json&geocode=$adres");
$files = json_decode($file, true);
$filess = $files["response"]["GeoObjectCollection"]["featureMember"][0]["GeoObject"]["Point"];
foreach ($filess as $key => $value) {
	$coord = (string)$value;
}
$coordinat = explode(" ", $coord);
$one = (float)$coordinat[0];
$two = (float)$coordinat[1];
?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Быстрый старт. Размещение интерактивной карты на странице</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
	    </script>
	    <script type="text/javascript">
	        ymaps.ready(init);
	      
	        function init(){ 
	            var myMap = new ymaps.Map("map", {
	                center: [<? echo "$one"?>,<? echo "$two"?>],
	                zoom: 7
	            }); 
	            
	            var myPlacemark = new ymaps.Placemark([<? echo "$one"?>,<? echo "$two"?>], {
	                hintContent: 'Содержимое всплывающей подсказки',
	                balloonContent: 'Содержимое балуна'
	            });
	            
	            myMap.geoObjects.add(myPlacemark);
	        }
	    </script>
	</head>
	<body>
		<p>Введите адрес.</p>
		<form action="index.php" method="GET">
			<input type="text" name ="adress">
			<input type="submit">
		</form>
		
		<div id="map" style="width: 600px; height: 400px"></div>
	</body>
</html>