<!DOCTYPE html>
<html>
<head>
<title>PHP SWITCH</title>
</head>
<body>

<?php
$color = "verde";

switch ($color) {
    case "rojo":
      echo "Hola";
      break;
    case "verde":
      echo "Bienvenido";
      break;
  }
echo "<br>";
switch ($color) {
    case "anaranjado":
      echo "Hola";
      break;
    case "amarillo":
      echo "Bienvenido";
      break;
    default:
      echo "Ninguno";
  }
?> 

</body>
</html>