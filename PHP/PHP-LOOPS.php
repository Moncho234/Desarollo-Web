<!DOCTYPE html>
<html>
<head>
<title>PHP LOOPS</title>
</head>
<body>

<?php
$i = 1; 
$x = 1;

while ($i < 6) {
  echo $i;
  $i++;
}
echo "<br>";
do {
    echo $x;
    $x++;
} while ($x < 6);
echo "<br>";
for ($i = 0; $i < 10; $i++) {
  echo $i;
}
echo "<br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $x) {
  echo $x;
}
?> 

</body>
</html>