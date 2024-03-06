<!DOCTYPE html>
<html>
<head>
<title>PHP IF...ELSE</title>
</head>
<body>

<?php
$a = 50;
$b = 10;
if ($a > $b) {
  echo "Hola Mundo";
}
echo "<br>";

if ($a != $b) {
  echo "Hola Mundo";
}
echo "<br>";

if ($a == $b) {
  echo "Si";
} else {
  echo "No";
}
echo "<br>";

if ($a == $b) {
  echo "1";
} elseif ($a > $b) {
  echo "2";
} else {
  echo "3";
}
?> 

</body>
</html>