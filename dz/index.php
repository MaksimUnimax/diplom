<?php
$animals = array(
    'Africa' => array('Syncerus caffer','Hippopotamus amphibius','Tragelaphus eurycerus Ogilby'),
    'Australia' => array('Canis lupus dingo','Macropus','Phascolarctos cinereus'),
    'Asia' => array('Bos javanicus','Arctictis binturong','Bos gaurus'),
    'Antarctida' => array('Balaenoptera musculus','Hydrurga leptonyx','Mirounga leonina'),
    'Europa' => array('Sciurus vulgaris','Cervus elaphus Linnaeus','Ursus arctos Linnaeus'),
);

foreach ($animals as $name => $test) {
    foreach ($test as $one) {
        $temp = explode(" ",$one);
        If (count($temp) == 2) {
             $first[$name][] = $temp[0];
             $second[] = $temp[1];}   
    }
}
shuffle($second);
foreach($first as $key3 => $val){
    foreach ($val as $val2){
        $arr[$key3][] = $val2 . " " . $second[$count2];
        $count2 = $count2 + 1;
    }
}
foreach ($arr as $key4 => $value) {
	echo "<p>";
	echo "<strong>", $key4,"</strong>", "<br/>";
	foreach ($value as  $value2) {
		echo $value2, "<br/>";
	}
};
?>