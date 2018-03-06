<?php

<?php

$continentsAnimals =  [
  'Africa'=>['African elephant','Gorilla'],
  'Antarctica'=>['Penguins','Blue whales'],
  'Asia'=>['Camelus bactrianus','Tiger'],
  'Australia'=>['Dingo','Koala'],
  'Europe'=>['Lynx','Brown Bear'],
  'North America'=>['Mountain lion','Racoon'],
  'South America'=>['Lama','Jaguar']
];

// foreach ($continentsAnimals as $continentsName => $animals) {
//   foreach ($animals as $animal) {
//     echo "<h2>$continentsName</h2>" . $animal . ', ' . PHP_EOL;
//     }
// };

  foreach ($continentsAnimals as $continentsName => $animals) {
   foreach ($animals as $animal) {
     $Newanimal = explode(' ', $animal);
     if (count($Newanimal) == 2) {
        $firstWords[$continentsName][]= $Newanimal[0];
        $secondWords[]= $Newanimal[1];
       }
     }
  }

// echo "<pre>";
// var_dump($firstWords);
// echo "<pre>";
// var_dump($secondWords);

shuffle($secondWords);

$doubleNamesAnimals = [];
foreach($firstWords as $continent=>$firstWordsNew) {
  foreach ($firstWordsNew as $firstWord) {
  $doubleNamesAnimals [$continent][] = $firstWord . " " .  array_shift($secondWords);
  }
}

foreach ($doubleNamesAnimals as $key => $value) {
  echo "<p>";
  echo "<h2>", $key,"</h2>";
  echo implode(", ", $value);
}
?>