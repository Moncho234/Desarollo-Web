<!DOCTYPE html>
<html>
<head>
<title>PHP ARRAYS</title>
</head>
<body>

<?php
$fruits = array("Manzana ", "Platano ","Naranja");
echo count($fruits);
echo "<br>";
echo $fruits[1];
echo "<br>";

$age = array("Ximena"=>"35", "Carlos"=>"37", "Miguel"=>"43");
var_dump($age);
echo "<br>";
echo "Carlos tiene " . $age["Carlos"] . " años.";
echo "<br>";

foreach($age as $x => $y) {
  echo "Key=" . $x . ", Value=" . $y;
}
echo "<br>";
$arrlength = count($age);
asort($age);
foreach($age as $nombre => $edad) {
   echo $edad;
   echo "<br>";
}
echo "<br>";

$colors = array("rojo", "verde", "azul", "amarillo"); 
sort($colors);
$arrlength = count($colors);
for($x = 0; $x < $arrlength; $x++) {
  echo $colors[$x];
  echo "<br>";
}
echo "<br>";

rsort($colors);
$arrlength = count($colors);
for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo "<br>";
  }
echo "<br>";
?> 

</body>
</html>
